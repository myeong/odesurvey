<?php

// Configuration
//-------------------------------
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);
define("ERROR_LOG_FILE", "/tmp/php-error.log");
ini_set("error_log", ERROR_LOG_FILE);
date_default_timezone_set('America/New_York'); 

if (!file_exists('credentials.inc.php')) {
   echo "My credentials are missing!";
   exit;
}

// Include libraries added with composer
require 'vendor/autoload.php';
// Include credentials
require 'credentials.inc.php';
// Include parse library
require ('vendor/parse.com-php-library_v1/parse.php');
// Include application functions
require 'functions.inc.php';

# Use Amazon Web Services Ec2 SDK to interact with EC2 instances
# use Aws\Ec2\Ec2Client;
 
// Functions
//-------------------------------
function TempLogger($message) {
	error_log( "Logger $message" );
}
// Start Slim router
//-------------------------------
$app = new \Slim\Slim();

// Reference router methods
//-------------------------------

// q-prototype.io/
//-----------------------------------------------------
// display placeholder landing page
$app->get('/', function () use ($app) {

    $paramValue = $app->request->get('param');
    
    $content['title'] = "ODE Survery Studies";
    $content['intro'] = <<<HTML
		<p>Home ODE Survey Studies</p>
HTML;

	// return $app->response->setBody($response);
	// Render content with simple bespoke templates
	$app->view()->setData(array('content' => $content));
	$app->render('tp_default.php');

});


// ************
$app->get('/:surveyName/survey1/', function ($surveyName) use ($app) {
	
	$parse = new parseRestClient(array(
	    'appid' => PARSE_APPLICATION_ID,
	    'restkey' => PARSE_API_KEY
	));

	// # Let's try
	// $params = array(
	//     'className' => 'Audit',
	//     'query' => array(
 //        	'systemId' => $system['objectId']
        	
 //    	),
 //    	'order' => 'securityCategory'
	// );
	// $request = $parse->query($params);
	// $response = json_decode($request, true);
	// $audits = $response['results'];

	$content['surveyName'] = $surveyName;
	$content['title'] = "SURVEY STUDY 1";
	$content['intro'] = <<<HTML

        <blockquote>First Survey Study
        </blockquote>
HTML;

	$app->view()->setData(array('content' => $content ));
	$app->render('survey/tp_home.php');

});


$app->run();

?>