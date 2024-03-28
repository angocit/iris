<?php
// create custom plugin settings menu
add_action('admin_menu', 'ftc_plugin_create_menu');

function ftc_plugin_create_menu() {

	//create new top-level menu
	add_menu_page('Cấu hình theme', 'Cài đặt theme', 'administrator', __FILE__, 'ftc_plugin_settings_page');

	//call register settings function
	add_action( 'admin_init', 'register_ftc_plugin_settings' );
}


function register_ftc_plugin_settings() {
    register_setting( 'ftc-plugin-settings-group', 'banner_home' );
    register_setting( 'ftc-plugin-settings-group', 'banner_home_mid' );
    register_setting( 'ftc-plugin-settings-group', 'title_banner_home' );
    register_setting( 'ftc-plugin-settings-group', 'url_banner_home' );
    register_setting( 'ftc-plugin-settings-group', 'hotline' );
}

function ftc_plugin_settings_page() {
?>
<div class="wrap">
<h1>Cấu hình theme</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'ftc-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'ftc-plugin-settings-group' ); ?>
    <p><strong>Cài đặt thông tin website</strong></p>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Tiêu đề banner</th>
        <td>
            <input type="text" name="title_banner_home" value="<?php echo get_option("title_banner_home"); ?>" placeholder="Tiêu đề banner">
        </td>
        </tr>
        <tr valign="top">
        <th scope="row">Link banner</th>
        <td>
            <input type="text" name="url_banner_home" value="<?php echo get_option("url_banner_home"); ?>" placeholder="Link banner">
        </td>
        </tr>
        <tr valign="top">
        <th scope="row">Banner</th>
        <td>
            <?php
        $arglogon = array(
            'parent_div_class' => 'custom-image-upload',
            'field_name' => 'banner_home',
            'field_id' => 'banner_home',
            'field_class' => 'banner_home',
            'upload_button_id' => 'banner_home',
            'upload_button_class' => 'banner_home',
            'upload_button_text' => 'Upload',
            'remove_button_id' => 'removelogo',
            'remove_button_class' => 'remove_icon_button',
            'remove_button_text' => 'Remove'
            );
            include('includes/theme-class.php');
        $theme_class = new THEME_CLASS();
        $theme_class->ani_add_media_custom($arglogon, false, get_option('banner_home'));
        ?>
        </td>
        </tr>
        <tr valign="top">
        <th scope="row">Hotline</th>
        <td>
            <input type="text" name="hotline" value="<?php echo get_option("hotline"); ?>" placeholder="Số Hotline">
        </td>
        </tr>  
        <tr valign="top">
        <th scope="row">Banner home mid</th>
        <td>
            <?php
        $argbannerhomemid = array(
            'parent_div_class' => 'custom-image-upload',
            'field_name' => 'banner_home_mid',
            'field_id' => 'banner_home_mid',
            'field_class' => 'banner_home_mid',
            'upload_button_id' => 'banner_home_mid',
            'upload_button_class' => 'banner_home_mid',
            'upload_button_text' => 'Upload',
            'remove_button_id' => 'removelogo',
            'remove_button_class' => 'remove_icon_button',
            'remove_button_text' => 'Remove'
            );
            include('includes/theme-class.php');
        $theme_class->ani_add_media_custom($argbannerhomemid, false, get_option('banner_home_mid'));
        ?>
        </td>
        </tr>      
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>