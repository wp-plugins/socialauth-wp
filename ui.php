<?php
function sc_render_login_form_SocialAuth_WP() {

    $images_url = plugin_dir_url(__FILE__) .'assets/images/';
    echo '<div class="SocialAuth_WP_connect_form" title="SocialAuth-WP PHP">';

    //global $HA_PROVIDER_CONFIG;
    $SocialAuth_WP_providers = get_option('SocialAuth_WP_providers');
    if(is_array($SocialAuth_WP_providers) && count($SocialAuth_WP_providers))
    {
        foreach($SocialAuth_WP_providers as $name => $details)
        {
            if(isset($details['enabled']) && $details['enabled']) {
                echo '<a href="' . plugin_dir_url(__FILE__) . 'connect.php?provider=' .$name . '" title="' . $name . '" class="SocialAuth_WP_login"><img alt="' .  $name. '" src="' . $images_url . strtolower($name) . '_32.png" /></a>';
            }
        }
    }
    echo "</div>";
} 
add_action( 'login_form','sc_render_login_form_SocialAuth_WP' );
?>