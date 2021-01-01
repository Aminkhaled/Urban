<?php
/**
 * Add Custom theme options
 */

function add_panel_to_theme(){
add_menu_page('Shamii House','Shamii House','manage_options','theme_panel','theme_settings_page',null,99);
}
function theme_settings_page(){
    ?>
    <div class="wrap">
        <h1>Theme Panel</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("shamii-house");
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
add_action('admin_menu','add_panel_to_theme');
function display_twitter_element()
{
    ?>
    <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
    ?>
    <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "shamii-house");

    add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "shamii-house", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "shamii-house", "section");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
}

add_action("admin_init", "display_theme_panel_fields");
class tmosestBlog_Customize
{

    public static function register($wp_customize)
    {
        tmosestBlog_Customize::addSocialLinks($wp_customize);
        tmosestBlog_Customize::addCopyRightText($wp_customize);
    }

    public static function addCopyRightText($wp_customize)
    {
        // adding section in wordpress customizer
        $wp_customize->add_section('copyright_extras_section', array(
            'title' => 'Copyright Text Section'
        ));
        // adding setting for copyright text
        $wp_customize->add_setting('text_setting', array(
            'default' => 'Default Text For copyright Section',
        ));
        // adding control for copyright text
        $wp_customize->add_control('text_setting', array(
            'label' => 'Copyright text',
            'section' => 'copyright_extras_section',
            'type' => 'text',
        ));
    }

    public static function addSocialLinks($wp_customize)
    {
        // adding section in wordpress customizer
        $wp_customize->add_section('socialmedia_extras_section', array(
            'title' => 'Social Media Section'
        ));
        // adding setting for twitter text url
        $wp_customize->add_setting('twitter_setting', array(
            'default' => 'https://www.twitter.com/',
        ));
        // adding control for twitter text url
        $wp_customize->add_control('twitter_setting', array(
            'label' => 'Twitter URL',
            'section' => 'socialmedia_extras_section',
            'type' => 'text',
        ));
        // adding setting for linkined text url
        $wp_customize->add_setting('linkined_setting', array(
            'default' => 'https://www.linkedin.com/',
        ));
        // adding control for linkined text url
        $wp_customize->add_control('linkined_setting', array(
            'label' => 'Linkedin URL',
            'section' => 'socialmedia_extras_section',
            'type' => 'text',
        ));
        // adding setting for rss feed text url
        $wp_customize->add_setting('rss_setting', array(
            'default' => site_url() . '/feed',
        ));
        // adding control for rss feed text url
        $wp_customize->add_control('rss_setting', array(
            'label' => 'RSS feed URL',
            'section' => 'socialmedia_extras_section',
            'type' => 'text',
        ));
        // adding setting for google plus text url
        $wp_customize->add_setting('googleplus_setting', array(
            'default' => 'https://plus.google.com/',
        ));
        // adding control for google plus text url
        $wp_customize->add_control('googleplus_setting', array(
            'label' => 'Google + URL',
            'section' => 'socialmedia_extras_section',
            'type' => 'text',
        ));
        // adding setting for facebook text url
        $wp_customize->add_setting('facebook_setting', array(
            'default' => 'https://www.facebook.com/',
        ));
        // adding control for facebook text url
        $wp_customize->add_control('facebook_setting', array(
            'label' => 'Facebook URL',
            'section' => 'socialmedia_extras_section',
            'type' => 'text',
        ));
        // adding setting for Youtube text url
        $wp_customize->add_setting('youtube_setting', array(
            'default' => 'https://www.facebook.com/',
        ));
        // adding control for Youtube text url
        $wp_customize->add_control('youtube_setting', array(
            'label' => 'Youtube URL',
            'section' => 'socialmedia_extras_section',
            'type' => 'text',
        ));
        // adding setting for Github text url
        $wp_customize->add_setting('instagram_setting', array(
            'default' => 'https://www.instagram.com/',
        ));
        // adding control for Github text url
        $wp_customize->add_control('instagram_setting', array(
            'label' => 'instagram URL',
            'section' => 'socialmedia_extras_section',
            'type' => 'text',
        ));
    }
}

add_action('customize_register', array('tmosestBlog_Customize', 'register'));


