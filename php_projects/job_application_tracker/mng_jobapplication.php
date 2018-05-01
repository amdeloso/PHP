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
        <h2 class="my-4 text-center">Job Application</h2>
        <form action="./sent_application.php" method="post">
            <div class="form-row">
               <input type="text" name="job_title" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Job Title">
               <input type="text" name="company" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Company">
               <input type="text" name="technologies" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Technologies">
              <!--  <input type="text" name="location" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Location"> -->
               <select name="location" class="form-control mb-3" id="sel1">
                    <option value="Auckland">Auckland</option>
                    <option value="Wellington">Wellington</option>
                    <option value="Hamilton">Hamilton</option>
                    <option value="Wellington">Wellington</option>
                </select>
               <input type="text" name="link" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Link">
               <input type="text" name="website" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Company Website">

        

            </div>

            <button>Save</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/charge.js"></script>
</body>
</html>