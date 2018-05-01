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
        <h2 class="my-4 text-center">Job Application</h2>
        <form action="./sent_feedback.php" method="post">
            <div class="form-row">
               <input type="text" name="status" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Status">
               <input type="text" name="feedback" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Feedback">
               <input type="hidden" name="id_applied" value="<?php echo $_GET['id'];?>">
            </div>

            <button>Save</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/charge.js"></script>
</body>
</html>