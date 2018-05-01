<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/JobdFeedback.php');


//Sanitize POST Array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$id_applied = $POST['id_applied'];
$status = $POST['status'];
$feedback = $POST['feedback'];

/* start to insert to DB  */

/* ########## CUSTOMER ################ */
$jobsFeedbackData = [
    'id_applied' => $id_applied,
    'status' => $status,
    'feedback' => $feedback
    
];

//Instantiate Jobsapplied object & must declare the the JobsApplied.php model at the top
$jobsfeedback = new JobdFeedback();

//Call Add function
$jobsfeedback->addJobsFeedback($jobsFeedbackData);

/* end to insert to DB  */

//Redirect to success
header('Location: vw_jobfeedback.php');

?>  