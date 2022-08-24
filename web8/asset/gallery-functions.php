<?php
/*-----------------------------------------

施工事例ギャラリー用function

-----------------------------------------*/
remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'my_gallery_shortcode');

function my_gallery_shortcode($attr) {
    $post = get_post();
    static $instance = 0;
    $instance++;

    if ( ! empty( $attr['ids'] ) ) {
        if ( empty( $attr['orderby'] ) )
            $attr['orderby'] = 'post__in';
        $attr['include'] = $attr['ids'];
    }

    $output = apply_filters( 'post_gallery', '', $attr );
    if ( $output != '' )
        return $output;

    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    }

    $html5 = current_theme_supports( 'html5', 'gallery' );
    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post ? $post->ID : 0,
        'itemtag'    => $html5 ? 'figure'     : 'dl',
        'icontag'    => $html5 ? 'div'        : 'dt',
        'captiontag' => $html5 ? 'figcaption' : 'dd',
        'columns'    => 3,
        'size'       => 'thumbnail',
        'include'    => '',
        'exclude'    => '',
        'link'       => ''
    ), $attr, 'gallery'));

    $id = intval($id);
    if ( 'RAND' == $order )
        $orderby = 'none';

    if ( !empty($include) ) {
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }

    $itemtag = tag_escape($itemtag);
    $captiontag = tag_escape($captiontag);
    $icontag = tag_escape($icontag);
    $valid_tags = wp_kses_allowed_html( 'post' );
    if ( ! isset( $valid_tags[ $itemtag ] ) )
        $itemtag = 'dl';
    if ( ! isset( $valid_tags[ $captiontag ] ) )
        $captiontag = 'dd';
    if ( ! isset( $valid_tags[ $icontag ] ) )
        $icontag = 'dt';

    $columns = intval($columns);
    $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
    $float = is_rtl() ? 'right' : 'left';

    $selector = "gallery-{$instance}";

    $gallery_style = $gallery_div = '';

    $size_class = sanitize_html_class( $size );
    $gallery_div = "";

    $output = apply_filters( 'gallery_style', $gallery_style . $gallery_div );

    $i = 0;

/*------------------------------------------------------------------------------------------*/

if(is_mobile()){
$output .= "<div class='fotorama'
   data-max-width='100%'
   data-minwidth='100%'
   data-max-height='300px'
   data-transition='slide'
   data-transitionduration='800'
   data-autoplay='true'
   data-arrows='true'
   data-click='true'
   data-swipe='true'
   data-loop='true'
   data-nav='thumbs'
   data-thumbwidth='90'
   data-thumbheight='60'
   data-navposition='bottom'
   data-fit='contain'>\n";
 }
 else{
 $output .= "<div class='fotorama'
  data-max-width='100%'
  data-minwidth='100%'
  data-max-height='600px'
  data-transition='slide'
  data-transitionduration='800'
  data-autoplay='true'
  data-arrows='true'
  data-click='true'
  data-swipe='true'
  data-loop='true'
  data-nav='thumbs'
  data-thumbwidth='134'
  data-thumbheight='90'
  data-navposition='bottom'
  data-fit='contain'>\n";
 }
    foreach ( $attachments as $id => $attachment ) {
        $img = wp_get_attachment_image_src( $id, "large", "no-trim" );
        $img_url = $img[0];
        $output .= "<img src='". $img_url ."' data-caption='" .wptexturize($attachment->post_excerpt). "'>\n";
    }
    $output .= "</div>\n";

/*------------------------------------------------------------------------------------------*/

    return $output;
}

?>
