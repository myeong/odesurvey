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
$app->get('/gettext/', function () use ($app) {

	$content['title'] = "Open Data Enterprise Survey"; 
	
	$app->view()->setData(array('content' => $content));
	$app->render('gettext/tp_home.php');
});


// ************
$app->get('/:surveyName/survey1/', function ($surveyName) use ($app) {
	
	$parse = new parseRestClient(array(
	    'appid' => PARSE_APPLICATION_ID,
	    'restkey' => PARSE_API_KEY
	));

	$content['surveyName'] = $surveyName;
	$content['title'] = "Open Data Enterprise Survey";
	$content['intro'] = <<<HTML

        <blockquote>First Survey Study
        </blockquote>
HTML;

	$app->view()->setData(array('content' => $content ));
	$app->render('survey/tp_home.php');

});

// ************
$app->get('/survey/opendata/:surveyId', function ($surveyId) use ($app) {
	
	$parse = new parseRestClient(array(
	    'appid' => PARSE_APPLICATION_ID,
	    'restkey' => PARSE_API_KEY
	));

	$content['surveyId'] = $surveyId;
	$content['surveyName'] = "opendata";
	$content['title'] = "Open Data Enterprise Survey";
	$content['intro'] = <<<HTML

        <blockquote>Second Survey Study
        </blockquote>
HTML;

	$app->view()->setData(array('content' => $content ));
	$app->render('survey/tp_home.php');

});

// ************
$app->post('/survey/opendata/:surveyId/', function ($surveyId) use ($app) {

	$parse = new parseRestClient(array(
	    'appid' => PARSE_APPLICATION_ID,
	    'restkey' => PARSE_API_KEY
	));

	// Access post variables
	$allPostVars = $app->request->post();
	// $allPostVars = $app->request();
	// echo "<pre>"; print_r($allPostVars); echo "</pre>";


if (! array_key_exists('use_prod_srvc', $allPostVars)) {
	
}

	// Initialize any empty parameters
    $params = array("org_name", "org_open_corporates_id", "org_type", "org_url", "org_year_founded", "org_description", "org_size_id", "industry_id", "org_greatest_impact", "use_prod_srvc", "use_prod_srvc_desc", "use_org_opt", "use_org_opt_desc", "use_research", "use_research_desc", "use_other", "use_other_desc", "org_hq_city", "org_hq_st_prov", "org_hq_country", "org_hq_lat", "org_hq_lon", "org_hq_city_locode", "org_hq_country_locode", "org_profile_year", "org_profile_status", "org_profile_src", "survey_contact_name", "survey_contact_title", "survey_contact_email", "survey_loc_lat", "survey_loc_lon");
    $object = array();
    foreach ($params as $param) {
    	if (!isset($allPostVars[$param])) {
    		$allPostVars[$param] = null;
    	}

    	$object[$param] = $allPostVars[$param];
    }

// if (! array_key_exists('use_prod_srvc', $allPostVars)) { $allPostVars['use_prod_srvc'] = false }
// if (! array_key_exists('use_org_opt', $allPostVars)) { $allPostVars['use_org_opt'] = false }
// if (! array_key_exists('use_research', $allPostVars)) { $allPostVars['use_research'] = false }
// if (! array_key_exists('use_other', $allPostVars)) { $allPostVars['use_other'] = false }

	$allPostVars["use_prod_srvc"] = settype($allPostVars["use_prod_srvc"],'boolean');
	$allPostVars["use_org_opt"] = settype($allPostVars["use_org_opt"],'boolean');
	$allPostVars["use_research"] = settype($allPostVars["use_research"],'boolean');
	$allPostVars["use_other"] = settype($allPostVars["use_other"],'boolean');


	echo "<pre>"; print_r($allPostVars); echo "</pre>";

	// Update Parse object and save
    $parse_params = array(
        'className' => 'org_profile',
	    'objectId' => $surveyId,
        'object' => $object  // $object contains all params
    );
    $request = $parse->update($parse_params);
    $response = json_decode($request, true);
    echo "<pre>";print_r($response);
    exit;
    if(isset($response['updatedAt'])) {
    	// Success
    	$app->redirect("survey/opendata/".$auditId."/submitted/");
    } else {
    	// Failure
    	echo "Problem. Problem with record update not yet handled.";
    	exit;
    	$app->redirect("/error".$auditId);
    }


});


// ************
$app->get('/survey/opendata/start/', function () use ($app) {
	
	$parse = new parseRestClient(array(
	    'appid' => PARSE_APPLICATION_ID,
	    'restkey' => PARSE_API_KEY
	));
	
	$params = array("orgName", "orgType", "orgURL");
	$object = array();
    foreach ($params as $param) {
    	if (!isset($allPostVars[$param])) {
    		$allPostVars[$param] = null;
    	}
    	// $object[$param] = $allPostVars[$param];
    	// if (in_array($param, array("daysRetainedStandard", "daysRetainedHeightened"))) {
    	// 	$object[$param] = intval($object[$param]);
    	// }
    }

    // print_r($object);
    
	# store new information as new record 
    $parse_params = array(
        'className' => 'org_profile',
        'object' => $object
    );
	// Create Parse object and save
    $request = $parse->create($parse_params);
    $response = json_decode($request, true);

    if(isset($response['objectId'])) {
    	// Success
    	$app->redirect("/survey/opendata/".$response['objectId']);
    } else {
    	// Failure
    	echo "Problem. Promlem with record creation not yet handled.";
    	exit;
    	$app->redirect("/error".$response['objectId']);
    }
});

// ************
$app->get('/survey/opendata/', function () use ($app) {
	
    $app->redirect("/survey/opendata/start/");
   

});

$app->run();

?>