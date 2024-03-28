<?php
include 'theme-class.php';
class ANI_Title_Widget extends WP_Widget
{
    function __construct()
    {
        $widget_ops = array(
            'classname' => 'custon_title_widget',
            'description' => 'Hiển thị title tùy chỉnh',
        );
        parent::__construct('custon_title_widget', 'Hiển thị title tùy chỉnh', $widget_ops);
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance)
    {
        extract($args);
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $subtitle = isset($instance['subtitle']) ? esc_attr($instance['subtitle']) : '';
        $type = isset($instance['type']) ? esc_attr($instance['type']) : '';
        echo $before_widget;        
        $class = 'font-berling text-2xl lg:text-[28px] text-[#1f1f1f] italic text-center';
        if ($type=='h2'){
            $class = 'font-berling text-2xl lg:text-[36px] text-[#1f1f1f] italic text-center leading-none';
            $title = $title.' <span class="text-white">'.$subtitle.'</span>';
        }
        echo '<'.$type.' class="'.$class.'">' . $title . '</'.$type.'>';
        echo $after_widget;
    ?>
    <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance)
    {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $subtitle = isset($instance['subtitle']) ? esc_attr($instance['subtitle']) : '';
        $type = isset($instance['type']) ? esc_attr($instance['type']) : '';
    ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'vista'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('subtitle'); ?>">Subtitle: <input class="widefat" id="<?php echo $this->get_field_id('subtitle'); ?>" name="<?php echo $this->get_field_name('subtitle'); ?>" type="text" value="<?php echo $subtitle; ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('type'); ?>">Type: 
            <select class="widefat" name="<?php echo $this->get_field_name('type'); ?>" id="<?php echo $this->get_field_id('type'); ?>">
                <option value="h2" <?=($type=='h2')?'selected':''?>>H2</option>
                <option value="h3" <?=($type=='h3')?'selected':''?>>H3</option>
            </select>
        </label></p>
<?php
    }
}
register_widget('ANI_Title_Widget');

// -------------------------------
class ANI_Icon_With_title_Widget extends WP_Widget
{
    function __construct()
    {
        $widget_ops = array(
            'classname' => 'icon_title_description',
            'description' => 'Hiển ảnh sản phẩm kèm tiêu đề',
        );
        parent::__construct('icon_title_description', 'Hiển ảnh sản phẩm kèm tiêu đề', $widget_ops);
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance)
    {
        extract($args);
        $image = isset($instance['image']) ? esc_attr($instance['image']) : '';
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $link = isset($instance['link']) ? esc_attr($instance['link']) : '';
        echo $before_widget;
    ?>
        <div class="text-center mb-8">
            <img srcset="<?=$image?> 2x" alt="" class="mx-auto">
            <h4><a href="<?=$link?>"><?=$title?></a></h4>
        </div>
        <?php
        echo $after_widget;
        ?>
    <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance)
    {
        $image = isset($instance['image']) ? esc_attr($instance['image']) : '';
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $link = isset($instance['link']) ? esc_attr($instance['link']) : '';
    ?>
        <p>
            <label>Icon</label>
            <?php
            $arg = array(
                'parent_div_class' => 'custom-image-upload',
                'field_name' => $this->get_field_name('image'),
                'field_id' => 'upload_logo',
                'field_class' => 'upload_image_field',
                'upload_button_id' => 'upload_logo_button',
                'upload_button_class' => 'upload_logo_button',
                'upload_button_text' => 'Upload',
                'remove_button_id' => 'remove_logo',
                'remove_button_class' => 'remove_logo_button',
                'remove_button_text' => 'Remove'
            );
            $theme_class = new THEME_CLASS();
            $theme_class->ani_add_media_custom($arg, false, $image);
            ?>
        </p>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'vista'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('link'); ?>">Link: <input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo $link; ?>" /></label></p>
    <?php
    }
}
register_widget('ANI_Icon_With_title_Widget');
// -------------------------------