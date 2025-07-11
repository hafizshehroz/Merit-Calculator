<?php
/*
* Plugin Name: Merit Calculator
* Author:      Hafiz Shehroz
* Author URI:  https://minicalculators.com
* Plugin URI:  https://www.fiverr.com/hafizshehroz
* Description: This Plugin is built for Merit Calculator
* Version:     1.0
*/
require_once('merit-calculator-ajax-req.php');

function merit_calculator_shortcode_callback(){
    $pluginPath = plugin_dir_url(__FILE__);
    wp_enqueue_style('merit_calculator_stylesheet'          , 	$pluginPath.'css/merit-calculator-style.css','','1.0');
    wp_enqueue_style('merit_stylesheet'                    , 	$pluginPath.'css/merit-style.css','','1.0');
    wp_enqueue_style('slim_select_stylesheet'                ,   'https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.css');

    wp_enqueue_script('merit_calculator_html2pdf_script'    , 	$pluginPath.'js/html2pdf.bundle.min.js','','1.1');
    wp_enqueue_script('sweetalert2_script'                      , 	$pluginPath.'js/sweetalert2.js');
    wp_enqueue_script('slim_select_script'                   ,   'https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.js',array('jquery'));
    wp_enqueue_script('merit_calculator_script'             , 	$pluginPath.'js/merit-calculator-script.js',array('jquery'),'1.0');

    wp_localize_script('merit_calculator_script',  'merit_calculator_url',
		array( 
			'ajaxurl' 	    => admin_url( 'admin-ajax.php'),
			'security' 	    => wp_create_nonce( 'merit-calculator-ajax-request'),
            'pluginUrl' 	=> $pluginPath,
            'wp_upload_dir' => wp_upload_dir(),
		)
	);
    ob_start();
    include('merit-calculator-view.php');
    return ob_get_clean();

}	
add_shortcode('MERIT_CALCULATOR_HAFIZSHEHROZ', 'merit_calculator_shortcode_callback');

// function merit_calculator_activation_callback(){
//     if(get_option('merit_calculator_calculator_db') === false){
//         global $wpdb;
//         $charset_collate = $wpdb->get_charset_collate();
//         $table_name = $wpdb->prefix . 'merit_calculator_calc_users';
//         $sql = "CREATE TABLE $table_name ( 
//             tax_max_id mediumint(11) NOT NULL AUTO_INCREMENT, 
//             ho_fname    VARCHAR(100)	DEFAULT	'' NOT NULL,
//             ho_phone    VARCHAR(100)	DEFAULT	'' NOT NULL,
//             ho_email    VARCHAR(100)	DEFAULT	'' NOT NULL,
//             ho_project  VARCHAR(100)	DEFAULT	'' NOT NULL,
//             sp_fname    VARCHAR(100)	DEFAULT	'' NOT NULL,
//             sp_phone    VARCHAR(100)	DEFAULT	'' NOT NULL,
//             sp_email    VARCHAR(100)	DEFAULT	'' NOT NULL,
//             sp_company  VARCHAR(100)	DEFAULT	'' NOT NULL,
//             tax_max_pdf VARCHAR(1000)	DEFAULT	'' NOT NULL,
//             tax_max_pass VARCHAR(100)	DEFAULT	'' NOT NULL,
//             PRIMARY KEY (tax_max_id) 
//         ) $charset_collate;";
//         require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
//         dbDelta($sql);

//         // $table_name = $wpdb->prefix . 'merit_calculator_settings';

//         // $sql = "CREATE TABLE $table_name ( 
//         //     backlog_id mediumint(11) NOT NULL AUTO_INCREMENT, 
//         //     merit_calculator_email    VARCHAR(55)	DEFAULT	'' NOT NULL,
//         //     merit_calculator_password    VARCHAR(55)	DEFAULT	'' NOT NULL,
//         //     PRIMARY KEY (backlog_id) 
//         // ) $charset_collate;";
//         // require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
//         // dbDelta($sql);
//         add_option('merit_calculator_calculator_db','1.0','','yes');
//     }
// }

// register_activation_hook(__FILE__,'merit_calculator_activation_callback');

// function merit_calculator_deactivation_callback(){

//     // global $wpdb;
//     // $table_name = $wpdb->prefix . 'merit_calculator_calc_users';
//     // $sql = "DROP TABLE IF EXISTS $table_name;";
//     // $wpdb->query($sql);

//     // $table_name = $wpdb->prefix . 'merit_calculator_settings';
//     // $sql = "DROP TABLE IF EXISTS $table_name;";
//     // $wpdb->query($sql);

//     delete_option("merit_calculator_calculator_db");
// }
// register_deactivation_hook(__FILE__,'merit_calculator_deactivation_callback');

// function merit_calculator_admin_page()
// {

// 	add_menu_page( 
// 		'Solar Tax Max™ Setting', 
// 		'Solar Tax Max™ Simple 2025', 
// 		'manage_options', 
// 		'merit_calculator_calculator_setting', 
// 		'merit_calculator_stting_page_view', 
// 		'', 
// 		'66' 
// 	);
// }

// add_action('admin_menu' , 'merit_calculator_admin_page');

// function merit_calculator_stting_page_view()
// {
//     $pluginPath = plugin_dir_url(__FILE__);
//     wp_enqueue_style('bootstrap_stylesheet'     ,   $pluginPath.'css/bootstrap.min.css');
//     wp_enqueue_style('data_tables_styles'       ,   $pluginPath.'css/dataTables.min.css');
//     // wp_enqueue_script('jquery_admin'            ,   $pluginPath.'js/jquery.js');
//     wp_enqueue_script('bootstrap_scripts'       ,   $pluginPath.'js/bootstrap.min.js','1.0',array('jquery'));
//     wp_enqueue_script('data_tables_scripts'     ,   $pluginPath.'js/dataTables.min.js',array('jquery'));
    
//     include('merit-calculator-admin-view.php');
	
	
// }