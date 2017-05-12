<?php
/*
Plugin Name: ALD home Dashboard 
Plugin URI:  http://knowledge.parcours-performance.com
Description: un tableau de bord de ma maison
Version:     0.1
Author:      Anne-Laure Delpech
Author URI:  http://knowledge.parcours-performance.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: ald-home-dashboard
 * @package			ald-home-dashboard
 * @version			0.1.0
 * @author 			Anne-Laure Delpech
 * @copyright 		Copyright (c) 2014-2014, Anne-Laure Delpech
 * @link			https://github.com/aldelpech/Plugins-WP/tree/master/cec29-ald-functions
 * @license 		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @since 			0.1.0
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/*----------------------------------------------------------------------------*
 * Path to files
 * @since 0.1.0
 *----------------------------------------------------------------------------*/
	/* 	will render
	http://testal.parcours-performance.com/wp-content/plugins/clea-add-functions/???  --> ALD_HOME_DASH_DIR_URL
	/home/parcoursz/testal/wp-content/plugins/clea-add-functions/???  --> ALD_HOME_DASH_DIR_URL
	clea-add-functions/clea-add-functions.php  --> ALD_HOME_DASH_BASENAME
	/home/parcoursz/testal/wp-content/plugins/clea-add-functions/clea-add-functions.php --> ALD_HOME_DASH_MAIN_FILE
	*/
	define( 'ALD_HOME_DASH_MAIN_FILE', __FILE__ );
	define( 'ALD_HOME_DASH_BASENAME', plugin_basename( ALD_HOME_DASH_MAIN_FILE ));
	define( 'ALD_HOME_DASH_DIR_PATH', plugin_dir_path( ALD_HOME_DASH_MAIN_FILE ));
	define( 'ALD_HOME_DASH_DIR_URL', plugin_dir_url( ALD_HOME_DASH_MAIN_FILE ));
	
	/* 
	echo '<p>' . ALD_HOME_DASH_DIR_URL . '???  --> ALD_HOME_DASH_DIR_URL' . '</p>' ;
	echo '<p>' . ALD_HOME_DASH_DIR_PATH . '???  --> ALD_HOME_DASH_DIR_URL' . '</p>' ;
	echo '<p>' . ALD_HOME_DASH_BASENAME . '???  --> ALD_HOME_DASH_BASENAME' . '</p>' ;
	echo '<p>' . ALD_HOME_DASH_MAIN_FILE . '???  --> ALD_HOME_DASH_MAIN_FILE' . '</p>' ;
	*/

/********************************************************************************
* appeler d'autres fichiers php et les exécuter
* @since 0.1
********************************************************************************/	
	/* main source of the code 
	* http://www.jeremycookson.com/how-to-add-scrolling-animations-in-wordpress/
	*/
	
	// charger des styles, fonts ou scripts correctement
	require_once ALD_HOME_DASH_DIR_PATH . 'includes/ald-home-dashboard-enqueues.php'; 


/******************************************************************************
* Actions à réaliser à l'initialisation et l'activation du plugin
* @since 0.1.0
******************************************************************************/

	function ald_home_dash_functions_activation() {
		

	}

	register_activation_hook(__FILE__, 'ald_home_dash_functions_activation'); // plugin's activation 


/*----------------------------------------------------------------------------*
 * deactivation and uninstall
 * * @since 0.1.0
 *----------------------------------------------------------------------------*/
	/* upon deactivation, wordpress also needs to rewrite the rules */
	register_deactivation_hook(__FILE__, 'ald_home_dash_functions_deactivation');

	function ald_home_dash_functions_deactivation() {
		// flush_rewrite_rules(); // pour remettre à 0 les permaliens
	}
	
	// register uninstaller
	register_uninstall_hook(__FILE__, 'ald_home_dash_functions_uninstall');
	
	function ald_home_dash_functions_uninstall() {    
		// actions to perform once on plugin uninstall go here
		// remove all options and custom tables
	}