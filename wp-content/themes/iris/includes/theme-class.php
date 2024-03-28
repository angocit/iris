<?php
if (!class_exists('THEME_CLASS')) {
 final class THEME_CLASS
    {
        function __construct()
        {
            add_action('init', array($this, 'create_posttype_slider'));
            add_action('init', array($this, 'slide_taxonomy'));
            add_action('admin_init', array($this, 'add_metabox'));
            add_action('save_post', array($this, 'save_post_doc'));
            add_action( 'add_meta_boxes',array($this,'woa_add_meta_box'));
            add_action( 'save_post', array($this,'woa_add_meta_box_save'));
        }
        function ani_add_media_custom($arg, $use_custom_buttons = false, $value = "")
        {
            $defaults = array(
                'useid' => false,
                'hidden' => true,

                'parent_div_class' => 'custom-image-upload',

                'field_label' => 'upload_image_field_label',
                'field_name' => 'upload_image_field',
                'field_id' => 'upload_image_field',
                'field_class' => 'upload_image_field',

                'upload_button_id' => 'upload_logo_button',
                'upload_button_class' => 'upload_logo_button',
                'upload_button_text' => 'Upload',

                'remove_button_id' => 'remove_logo_button',
                'remove_button_class' => 'remove_logo_button',
                'remove_button_text' => 'Remove',

                'preview_div_class' => 'preview',
                'preview_div_class2' => 'preview remove_box',
                'preview_div_id' => 'preview',

                'height' => '100',
                'width' => '100'
            );
            $arguments = wp_parse_args($arg, $defaults);

            extract($arguments);

            // print_r($value);

            //$usesep="#",$field_name ="upload_image",$value_target="upload_logo",$button_click="upload_logo_button",$remove_button="remove_logo",$preview_div="preview"
            wp_enqueue_media();
?>
            <?php if (!$use_custom_buttons) : ?>
                <div class="<?php echo $parent_div_class; ?>" id="<?php echo $parent_div_class; ?>">

                    <input name="<?php echo $field_name; ?>" id="<?php echo $field_id; ?>" class="<?php echo $field_class; ?>" <?php if ($hidden) : ?> type="hidden" <?php else : ?> type="text" <?php endif; ?> value="<?php if ($value != "") {
                                                                                                                                                                                                                            echo stripslashes($value);
                                                                                                                                                                                                                        }  ?>" />

                    <input type="button" class="button button-primary <?php echo $upload_button_class; ?>" id="<?php echo $upload_button_id; ?>" value="<?php echo $upload_button_text; ?>">

                    <input type="button" class="button button-primary <?php echo $remove_button_class; ?>" id="<?php echo $remove_button_id; ?>" <?php if ($value == "") {  ?> disabled="disabled" <?php } ?> value="<?php echo $remove_button_text; ?>">

                    <div class="<?php echo $preview_div_class; ?>" style="float: none; <?php if ($value == "") { ?> display: none; <?php } ?>">
                        <img src="<?php echo stripslashes($value);  ?>" style="margin: 10px;" width="150" height="100" alt="">
                    </div>

                    <div style="clear: both;"></div>
                </div>
            <?php endif; ?>
            <?php
            $usesep = ($useid) ? "#" : ".";
            if ($useid) :

                $field_class = $field_id;
                $upload_button_class = $upload_button_id;
                $remove_button_class = $remove_button_id;
                $preview_div_class = $preview_div_id;

            endif;
            ?>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $('<?php echo $usesep . $remove_button_class; ?>').click(function(e) {
                        <?php if (!$useid) : ?>
                            $(this).parent().find("<?php echo $usesep . $field_class; ?>").val("");
                            $(this).parent().find("<?php echo $usesep . $preview_div_class; ?> img").attr("src", "").fadeOut("slow");
                        <?php else : ?>
                            $("<?php echo $usesep . $field_class; ?>").val("");
                            $("<?php echo $usesep . $preview_div_class; ?> img").attr("src", "").fadeOut("slow");
                        <?php endif; ?>
                        $(this).attr("disabled", "disabled");
                        return false;
                    });
                    // if($('.preview img').attr('src')=='') $('.preview').hide();
                    // Uploading files
                    var _custom_media = true,
                        _orig_send_attachment = wp.media.editor.send.attachment;

                    $('<?php echo $usesep . $upload_button_class; ?>').click(function(e) {
                        var send_attachment_bkp = wp.media.editor.send.attachment;
                        var button = $(this);
                        var id = button.attr('id').replace('_button', '');
                        _custom_media = true;
                        wp.media.editor.send.attachment = function(props, attachment) {
                            if (_custom_media) {

                                <?php if (!$useid) : ?>
                                    //console.log("<?php echo $usesep . $preview_div_class; ?>"); 
                                    button.parent().find("<?php echo $usesep . $field_class; ?>").val(attachment.url);
                                    button.parent().find("<?php echo $usesep . $preview_div_class; ?> img").attr("src", attachment.url).fadeIn("slow");
                                    button.parent().find("<?php echo $usesep . $remove_button_class; ?>").removeAttr("disabled");
                                    if ($('.preview img').length > 0) {
                                        $('.preview').css('display', 'block');
                                    };
                                <?php else : ?>
                                    $("<?php echo $usesep . $field_class; ?>").val(attachment.url);
                                    $("<?php echo $usesep . $preview_div_class; ?> img").attr("src", attachment.url).fadeIn("slow");
                                    $("<?php echo $usesep . $remove_button_class; ?>").removeAttr("disabled");
                                <?php endif; ?>
                            } else {
                                return _orig_send_attachment.apply(this, [props, attachment]);
                            };
                            $('.preview').removeClass('remove_box');
                        }

                        wp.media.editor.open(button);
                        return false;
                    });
                });
            </script>
        <?php
        }
        function create_posttype_slider()
        {
            register_post_type(
                'slider',
                array(
                    'labels' => array(
                        'name' => __('WOA Slider'),
                        'singular_name' => __('WOA Slider')
                    ),
                    'supports' => array(
                        'title',
                        'thumbnail'
                    ),
                    'public' => true,
                    'has_archive' => true,
                    'menu_icon' => 'dashicons-slides',
                    'rewrite' => array('slug' => 'slider'),
                    'show_in_rest' => true,

                )
            );
        }
        function slide_taxonomy()
        {
            register_taxonomy(
                'slider_cat',
                'slider',
                array(
                    'hierarchical' => true,
                    'label' => 'Loại slide',
                    'query_var' => true,
                    'show_in_nav_menus' => true,
                    'rewrite' => array(
                        'slug' => 'slider-type',
                        'with_front' => false
                    )
                )
            );
        }
        function slider_image_gallery()
        {
            global $post;
            $custom = get_post_custom($post->ID);
        ?>
            <style>
                #project_images_container {
                    float: left;
                    width: 100%;
                }

                #project_images_container ul li {
                    float: left;
                    width: 100px;
                    margin: 10px
                }

                #project_images_container ul li img {
                    width: 100%;
                    height: auto !important
                }
            </style>
            <p>
            <div id="project_images_container">
                <ul class="project_images">
                    <?php
                    if (isset($_GET['from_post'])) {
                        $project_image_gallery = get_post_meta($_GET['from_post'], '_project_image_gallery', true);
                    } elseif (metadata_exists('post', $post->ID, '_project_image_gallery')) {
                        $project_image_gallery = get_post_meta($post->ID, '_project_image_gallery', true);
                    } else {
                        // Backwards compat
                        $attachment_ids = get_posts('post_parent=' . $post->ID . '&numberposts=-1&post_type=attachment&orderby=menu_order&order=ASC&post_mime_type=image&fields=ids&meta_key=_woocommerce_exclude_image&meta_value=0');
                        $attachment_ids = array_diff($attachment_ids, array(get_post_thumbnail_id()));
                        $project_image_gallery = implode(',', $attachment_ids);
                    }

                    $attachments = array_filter(explode(',', $project_image_gallery));

                    if ($attachments) {
                        foreach ($attachments as $attachment_id) {
                            echo '<li class="image" data-attachment_id="' . esc_attr($attachment_id) . '">
                        ' . wp_get_attachment_image($attachment_id, 'thumbnail') . '
                        <ul class="actions">
                        <li><a href="#" class="delete tips" data-tip="' . __('Delete image') . '">' . __('Delete') . '</a></li>
                        </ul>
                        </li>';
                        }
                    }
                    ?>
                </ul>
                <input type="hidden" id="project_image_gallery" name="project_image_gallery" value="<?php echo esc_attr($project_image_gallery); ?>" />

            </div>
            <script type="text/javascript" src="<?php echo get_template_directory_uri() . '/includes/js/gallery.js' ?>"></script>
            <p class="add_project_images hide-if-no-js">
                <a href="#" data-choose="<?php echo 'Chọn ảnh để thêm vào thư viện'; ?>" data-update="<?php echo 'Thêm ảnh vào thư viện'; ?>" data-delete="<?php echo 'Delete image'; ?>" data-text="<?php echo 'Xóa'; ?>"><?php echo 'Thêm ảnh vào thư viện'; ?></a>
            </p>
            </p>
<?php
        }
        function add_metabox()
        {
            add_meta_box("__project_image_gallery", "Thư viện ảnh", array($this, "slider_image_gallery"), array("slider"), "normal", "low");
        }
        function save_post_doc()
        {
            global $post;
            if ($post) {
                update_post_meta($post->ID, "_project_image_gallery", $_POST["project_image_gallery"]);
            }
        }
        function Get_Slider_Home($catid,$type='tab'){
            $args = array(
                'post_type' => 'slider',
                'post_status' => 'publish',
                'orderby' => 'post_date',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'slider_cat',
                        'field' => 'term_id',
                        'terms' => $catid,
                    )
                )
            );
            $kq = '';
            $posts = query_posts($args);
            switch ($type) {
                case 'tab':
                    foreach ($posts as $key => $value) {
                        $active ='';
                        if ($key==0){
                            $active = 'active';
                        }
                        require('tpl/slide-tab.php');
                    }
                    break;
                
                default:
                    foreach ($posts as $key => $value) {                        
                        require('tpl/slide-content.php');                      
                    }
                    break;
            }
            wp_reset_query();
        }
        function GetProductCat(){
            $terms = get_terms(array(
                'taxonomy' => 'product_cat',
                'hide_empty' => true,
                'parent'=>0
            ));
            foreach($terms as $key=>$value){
                if ($key%6==0){
                    echo '<div class="swiper-slide">
                        <div class="grid grid-cols-3 lg:grid-cols-6 gap-x-8 gap-y-4">';
                }
                require('tpl/loop_product_cat.php');
                if (($key%6==5)||($key==(count($terms)-1))){
                    echo '</div></div>';
                }
            }
        }
        function woa_add_meta_box()
    {
        add_meta_box( 'label_product', 'Nhãn hiển thị', array($this,'input_box'), 'product','side');
    }    
    function input_box($post){
        $label = get_post_meta($post->ID,'product_label',true);
        ?>
            <input type="radio" id="bestseller" name="product_label" value="bestseller" <?=($label=='bestseller')?'checked':''?>>
            <label for="bestseller">Best seller</label><br>
            <input type="radio" id="new" name="product_label" value="new" <?=($label=='new')?'checked':''?>>
            <label for="new">New</label><br>
            <input type="radio" id="sale" name="product_label" value="sale" <?=($label=='sale')?'checked':''?>>
            <label for="sale">Sale</label><br>
        <?php
    }
    function woa_add_meta_box_save( $post_id )
        {
            if (isset($_POST['product_label'])){
                $label = sanitize_text_field( $_POST['product_label'] );
                update_post_meta( $post_id, 'product_label', $label );
            }
        }
        function Get_BestSellerProducts($block=8){
            $args = array(
                'post_type' => 'product',
                'post_status' => 'publish',
                'orderby' => 'post_date',
                'posts_per_page' => 24,
                'order' => 'DESC',
                'meta_query'    => array(
                    array(
                        'key'       => 'product_label',
                        'value'     => 'bestseller',
                        'compare'   => '=',
                    )
                )
            );
            $posts = query_posts($args);
            foreach ($posts as $key => $value) {
                $product = new WC_Product($value->ID);
                if ($key%$block==0){
                    echo '<div class="swiper-slide">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">';
                }
                    require('tpl/loop_product_component.php');
                if (($key%$block==($block-1))||($key==(count($posts)-1))){
                    echo '</div></div>';
                }
            }
            wp_reset_query();
        }
        function Get_logoPartner($id){
            $gallerys = get_post_meta($id,'_project_image_gallery',true);
            $gallery = explode(',',$gallerys);
            foreach ($gallery as $key1 => $value1) {
                echo '<div class="swiper-slide">
                        <div>
                            <img srcset="'.wp_get_attachment_image_url($value1,'').' 2x" alt="" />
                        </div>
                    </div>';
            }
        }
        function Get_Project_Home(){
            $args = array(
                'post_type' => 'duan',
                'post_status' => 'publish',
                'orderby' => 'post_date',
                'posts_per_page' => 10,
                'order' => 'DESC'
            );
            $posts = query_posts($args);
            foreach ($posts as $key => $value) {
                echo '<div class="swiper-slide">
                <div class="projects-item">
                    <div>
                        '.get_the_post_thumbnail($value->ID,'').'
                    </div>
                    <div class="text-center lg:text-left">
                        <h3 class="mt-[14px] mb-[7px]">
                            <a
                                href="'.get_permalink($value->ID).'"
                                class="text-xl font-bold text-[#1F1F1F] font-berling md:font-SFPro"
                                >'.$value->post_title.'</a
                            >
                        </h3>
                        <p
                            class="text-[#1F1F1F] font-SFPro text-center lg:text-left"
                        >
                        '.$value->post_excerpt.'
                        </p>
                    </div>
                </div>
            </div>';
            }
            wp_reset_query();
        }
        function get_Children_term($parent){
            $childrent_term = get_term_children($parent,'product_cat');
            // var_dump($childrent_term);
            if (!empty($childrent_term)){
            foreach($childrent_term as $key=>$term){
                $value = get_term_by('term_id',$term,'product_cat');
                // var_dump($value);
                if ($key%6==0){
                    echo '<div class="swiper-slide">
                        <div class="grid grid-cols-3 lg:grid-cols-6 gap-x-8 gap-y-4">';
                }
                require('tpl/loop_product_cat.php');
                if (($key%6==5)||($key==(count($childrent_term)-1))){
                    echo '</div></div>';
                }
            }
            }
        }
    }    
}
?>