<?php
    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/JobsApplied.php');

    //Instantiate Customer
    $jobsapplied = new JobsApplied();

    //Get Customers
    $jobsappliedvw = $jobsapplied->getJobsApplied();

    /* print_r($customers); */
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
            <a href="mng_jobapplication.php" class="btn btn-secondary">Add Jobs Applied</a>
            <a href="vw_jobsapplied.php" class="btn btn-primary">View Jobs Applied</a>
       </div>
       <hr>
       <h2>Jobs Applied</h2>
       <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Position</th>
                <th>Company</th>
                <th>Location</th>
                <th>Technologies</th>
                <th>Link</th>
                <th>Feedback</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($jobsappliedvw as $javw): ?>
                <tr>
                    <td><?php echo $javw->date_applied; ?></td>
                    <td><?php echo $javw->job_title; ?> 
                    <td><a href="<?php echo $javw->website; ?>" target="_blank"><?php echo $javw->company; ?></a></td>
                    <td><?php echo $javw->location; ?></td>
                    <td><?php echo $javw->technologies; ?></td>
                    <td><a href="<?php echo $javw->link; ?>">Click Here</a></td>
                    <td>
                        <a href="mng_jobfeedback.php?id=<?php echo $javw->id_applied; ?>">Add</a>
                        <a href="vw_feedback.php?id=<?php echo $javw->id_applied; ?>">View</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
       </table>
       <p><a href="index.php">Main Page</a></p>
    </div>
</body>
</html>