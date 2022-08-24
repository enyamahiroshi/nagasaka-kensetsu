<?php
/**********************************************************************************************************************
 ウィジェットの登録
**********************************************************************************************************************/
class My_Widget extends WP_Widget{
    /**
     * Widgetを登録する
     */
    function __construct() {
        parent::__construct(
            'my_widget', // Base ID
            'Widgetの名前', // Name
            array( 'description' => 'Widgetの説明', ) // Args
        );
    }

    /**
     * 表側の Widget を出力する
     *
     * @param array $args      'register_sidebar'で設定した「before_title, after_title, before_widget, after_widget」が入る
     * @param array $instance  Widgetの設定項目
     */
    public function widget( $args, $instance ) {
        $email = $instance['email'];
        echo $args['before_widget'];

        echo "<p>Email: ${email}</p>";

        echo $args['after_widget'];
    }

    /** Widget管理画面を出力する
     *
     * @param array $instance 設定項目
     * @return string|void
     */
    public function form( $instance ){
        $email = $instance['email'];
        $email_name = $this->get_field_name('email');
        $email_id = $this->get_field_id('email');
        ?>
        <p>
            <label for="<?php echo $email_id; ?>">Email:</label>
            <input class="widefat" id="<?php echo $email_id; ?>" name="<?php echo $email_name; ?>" type="text" value="<?php echo esc_attr( $email ); ?>">
        </p>
        <?php
    }

    /** 新しい設定データが適切なデータかどうかをチェックする。
     * 必ず$instanceを返す。さもなければ設定データは保存（更新）されない。
     *
     * @param array $new_instance  form()から入力された新しい設定データ
     * @param array $old_instance  前回の設定データ
     * @return array               保存（更新）する設定データ。falseを返すと更新しない。
     */
    function update($new_instance, $old_instance) {
        if(!filter_var($new_instance['email'],FILTER_VALIDATE_EMAIL)){
            return false;
        }
        return $new_instance;
    }
}

add_action( 'widgets_init', function () {
    register_widget( 'My_Widget' );  //WidgetをWordPressに登録する
    register_sidebar( array(  //「サイドバー」を登録する
        'name'          => 'サイドバー(topic)',
        'id'            => 'topic_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
} );

?>
