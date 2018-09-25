<?php
/**
 * Plugin Name: Cleancoded WP Settings API
 * Plugin URI: https://CLEANCODED.com
 * Description: Cleancoded WordPress Settings API testing
 * Author: CLEANCODED
 * Author URI: https://CLEANCODED.com
 * Version: 1.0
 */

require_once dirname( __FILE__ ) . '/src/class.cod-settings-api.php';
require_once dirname( __FILE__ ) . '/cod-api/cod-api-example.php';

new Cleancoded_Settings_API_Test();