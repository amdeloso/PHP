<?php
    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/JobsApplied.php');

    //Instantiate JobsFeedback
    $jobsapplied = new JobsApplied();

    //Get 
    $feedbackvw = $jobsapplied->getJobsFeedback($_GET['id']);

    /* print_r($feedbackvw); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Job Application Tracker</title>
</head>
<body>
    <div class="container mt-4">
       <div class="btn-group" role="group">
            <a href="mng_feedback.php" class="btn btn-secondary">Add Jobs Feedback</a>
            <a href="vw_feedback.php" class="btn btn-primary">View Jobs Feedback</a>
       </div>
       <hr>
       <h2>Feedback</h2>
       <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Status</th>
                <th>Feedback</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($feedbackvw as $fvw): ?>
                <tr>
                    <td><?php echo $fvw->date_updated; ?></td>
                    <td><?php echo $fvw->status; ?></td>
                    <td><?php echo $fvw->feedback; ?> 
                </tr>
            <?php endforeach; ?>
        </tbody>
       </table>
       <p><a href="index.php">Main Page</a></p>
    </div>
</body>
</html>