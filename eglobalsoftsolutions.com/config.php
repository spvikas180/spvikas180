<?php
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die( header( 'location: /404.php' ) );

    }
?>
<?php
error_reporting(0);
define("BASE", "http://elearning.vikas/eglobalsoftsolutions.com/");
define("email", "info@nexuswebworld.com");
define("email_sales", "sales@nexuswebworld.com");
define("email_support", "support@nexuswebworld.com");
define("email_hr", "hr@nexuswebworld.com"); 
define("email_contact", "contact@nexuswebworld.com");

define("add", "Spaze Itech Park, Gurgaon-122018, India");
define("brand_title", "Nexus Web World");
$phones = array("phone" => "+91 99999 88888", "phone1" => "1800 000 000");
$phpSlash="/";
$cr_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
include_once"control/functions.php";
?>
