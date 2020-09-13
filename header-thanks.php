<?php

if(isset($_POST['fullName']) && isset($_POST['email'])) {
            
        $nameReg = "/^[' a-zא-ת]+(\s[' a-zא-ת]+)*$/";
        $phoneReg = "/^(?:0(?!(5|7))(?:2|3|4|8|9))(?:-?\d){7}$|^(0(?=5|7)(?:-?\d){9})$/";
        $emailReg = "/^(?!.*\.\.)[\w.\-#!$%&'*+\/=?^_`{}|~]{1,35}@[\w.\-]+\.[a-zA-Z]{2,15}$/";

        $leadname =  preg_match($nameReg, $_POST['fullName']) ? $_POST['fullName'] : '';
        $leadphone = preg_match($phoneReg, $_POST['phone'])   ? $_POST['phone'] : '';
        $leadmail =  preg_match($emailReg, $_POST['email'])   ? $_POST['email'] : '';
 
            // $arr = array(
            //     'properties' => array(
            //         array(
            //             'property' => 'email',
            //             'value' => $leadmail
            //         ),
            //         array(
            //             'property' => 'phone',
            //             'value' => $leadphone
            //         ),
            //         array(
            //             'property' => 'firstname',
            //             'value' => $leadname
            //         )
            //     )
            // );
            $post_json = json_encode($arr);
            $hapikey = '4dfaa244-1260-420c-a40c-5847cf12ee02';
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
      
            if( $status_code !== 200 ) {
                // echo "curl Errors: " . $curl_errors;
                // echo "\nStatus code: " . $status_code;
                // echo "\nResponse: " . $response;
                // die;
                $_SESSION['form_error'] = true;
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                $_SESSION['form_error'] = false;
            }
        }  else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

?>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hackeru_Pro
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Custom -->
	<link rel="icon" href="https://www.hackeru.com/wp-content/uploads/2019/05/faviconhackeru.png" sizes="32x32" />
    <link rel="icon" href="https://www.hackeru.com/wp-content/uploads/2019/05/faviconhackeru.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://www.hackeru.com/wp-content/uploads/2019/05/faviconhackeru.png" />
    <meta name="msapplication-TileImage" content="https://www.hackeru.com/wp-content/uploads/2019/05/faviconhackeru.png" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/thx.css">
	<!-- Custom  -->
</head>
