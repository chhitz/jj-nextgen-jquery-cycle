<?php
/*
Plugin Name: JJ NextGen JQuery Cycle
Description: Allows you to pick a gallery from the 'NextGen Gallery' plugin to use with 'JQuery Cycle Lite'.
Author: JJ Coder
Version: 1.0.4
*/

if ( ! defined( 'WPJJNGGJ_CYCLE_PLUGIN_BASENAME' ) )
	define( 'WPJJNGGJ_CYCLE_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

if ( ! defined( 'WPJJNGGJ_CYCLE_PLUGIN_NAME' ) )
	define( 'WPJJNGGJ_CYCLE_PLUGIN_NAME', trim( dirname( WPJJNGGJ_CYCLE_PLUGIN_BASENAME ), '/' ) );

if ( ! defined( 'WPJJNGGJ_CYCLE_PLUGIN_DIR' ) )
	define( 'WPJJNGGJ_CYCLE_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . WPJJNGGJ_CYCLE_PLUGIN_NAME );

function WPJJNGGJ_CYCLE_set_plugin_meta($links, $file) 
{
  $plugin = WPJJNGGJ_CYCLE_PLUGIN_BASENAME;  
  if ($file == $plugin) 
  {
    $links[] = '<a href="http://wordpress.org/extend/plugins/jj-nextgen-jquery-cycle/">' . 'Visit plugin site' . '</a>';    
    $links[] = '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=PSCMPVDADYP74&lc=NZ&item_name=JJNextGenJQueryCycle&item_number=jjcoder_cycle&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted">' . 'Donate' . '</a>';
  }
  return $links;
}
if( is_admin() )
{
  add_filter( 'plugin_row_meta', 'WPJJNGGJ_CYCLE_set_plugin_meta', 10, 2 );
}

require_once WPJJNGGJ_CYCLE_PLUGIN_DIR . '/includes/application.php';