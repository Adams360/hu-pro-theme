<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

// Setup
define( 'PRO_DEV_MODE', true ); 

// Require Extras files
require_once __DIR__ . '/extras/setup.php';
require_once __DIR__ . '/extras/theme-functions.php';

//  hooks
add_action( 'wp_enqueue_scripts', 'pro_enqueue' );
add_action( 'after_setup_theme', 'pro_setup_theme' );





add_action( 'wpcf7_init', 'wpcf7_add_form_tag_current_url' );

function wpcf7_add_form_tag_current_url() {
    // Add shortcode for the form [current_url]
    wpcf7_add_form_tag( 'current_url',
        'wpcf7_current_url_form_tag_handler',
        array(
            'name-attr' => true
        )
    );
}

// Parse the shortcode in the frontend
function wpcf7_current_url_form_tag_handler( $tag ) {
    global $wp;
    $url = home_url( $wp->request );
    return '<input type="hidden" name="lead_source" value="'.$url.'" />';
}

// filters
// if ( PRO_DEV_MODE ) {
// 	add_filter('show_admin_bar', '__return_false');
// }
// Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter( 'wpcf7_validate_configuration', '__return_false' );
remove_filter('wpcf7_validate_radio', 'wpcf7_checkbox_validation_filter', 10);


add_action("wpcf7_before_send_mail", "create_hs_contact");  
function create_hs_contact($cf7) {
    // get the contact form object
    $wpcf = WPCF7_ContactForm::get_current();
	// if you wanna check the ID of the Form $wpcf->id

    if ( isset( $_POST ) ) {

        if( isset($_POST['expertise_selection']) && $_POST['expertise_selection'] === 'Other') {
            $_POST['expertise_selection'] = 'Tailor-Made';
        }

        if( isset($_POST['check']) && $_POST['check'] === "1" ) {
            $_POST['check'] = true;
        } else {
            $_POST['check'] = false;
        }

     

            


		$arr = array(
            'properties' => array(
                array(
                    'property' => 'email',
                    'value' => $_POST['email']
                ),
                array(
                    'property' => 'firstname',
                    'value' => $_POST['fullname']
                ),
                array(
                    'property' => 'phone',
                    'value' => $_POST['phone']
                ),
                array(
                    'property' => 'company',
                    'value' => $_POST['company']
                ),
                array(
                    'property' => 'title',
                    'value' => $_POST['title']
                ),
                array(
                    'property' => 'interested_expertise',
                    'value'    => $_POST['expertise_selection']
                ),
                array(
                    'property' => 'interested_syllabus',
                    'value'    => $_POST['interested_syllabus']
                ),
                array(
                    'property' => 'participants',
                    'value'    => $_POST['participants']
                ),
                array(
                    'property' => 'message',
                    'value'    => $_POST['message']
                ),
                array(
                    'property' => 'lead_source',
                    'value'    =>  $_POST['lead_source']
                ),
                array(
                    'property' => 'agreed_privacy_policy',
                    'value'    =>  $_POST['check']
                )
            )
        );

        $post_json = json_encode($arr);


   

		$hapikey = 'ed3fbd18-7abb-4afe-949a-dbb5e2ac567f';
        $endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . $hapikey;
        $ch = @curl_init();
        @curl_setopt($ch, CURLOPT_POST, true);
        @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
        @curl_setopt($ch, CURLOPT_URL, $endpoint);
        @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = @curl_exec($ch);
        $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_errors = curl_error($ch);
        @curl_close($ch);
        // echo "curl Errors: " . $curl_errors;
        // echo "\nStatus code: " . $status_code;
        // echo "\nResponse: " . $response;
    }
    $wpcf->skip_mail = true;    




    
    return $wpcf;
}







