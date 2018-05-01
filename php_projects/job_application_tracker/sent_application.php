<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/JobsApplied.php');


//Sanitize POST Array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$job_title = $POST['job_title'];
$company = $POST['company'];
$technologies = $POST['technologies'];
$location = $POST['location'];
$link = $POST['link'];

/* start to insert to DB  */

/* ########## JOBS APPLIED ################ */
$jobsAppliedData = [
    'id_profile' => 1,
    'job_title' => $job_title,
    'company' => $company,
    'technologies' => $technologies,
    'location' => $location,
    'link' => $link,
    'website' => $website
    
];

//Instantiate Jobsapplied object & must declare the the JobsApplied.php model at the top
$jobsapplied = new JobsApplied();

//Call Add function
$jobsapplied->addJobsApplied($jobsAppliedData);

/* end to insert to DB  */

//Redirect to success
header('Location: vw_jobsapplied.php');

?>  