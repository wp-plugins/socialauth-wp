<?php
//locating HybridAuth
if(!file_exists( dirname(__FILE__) . '/hybridauth/Hybrid/Auth.php')) {
    die( sprintf( __( "Sorry, but you can not install Plugin 'SocialAuth-WP'. It seems you missed to add 'hybrid auth' library with this plugin.") ));
}
define('SOCIALAUTH_WP_PLUGIN_PATH', plugin_dir_path(__FILE__));
define(SOCIALAUTH_WP_HYBRIDAUTH_DIR_PATH, SOCIALAUTH_WP_PLUGIN_PATH . '/hybridauth/');

$HA_PROVIDER_CONFIG = array();
$HA_CONFIG = get_ha_config();

if(isset($HA_CONFIG) && is_array($HA_CONFIG)) {
    $HA_PROVIDER_CONFIG = $HA_CONFIG;
} else {
    $HA_PROVIDER_CONFIG = array();
}

function get_ha_config(){
    return include_once SOCIALAUTH_WP_HYBRIDAUTH_DIR_PATH . '/config.php';
}

function compare_displayOrder($a, $b)
{
    if(!isset($a['display_order']) || !isset($b['display_order']))
        return 0;
    if ($a['display_order'] == $b['display_order']) {
        return 0;
    }
    return ($a['display_order'] < $b['display_order']) ? -1 : 1;
}