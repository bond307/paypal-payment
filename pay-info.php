<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Deposi</title>
</head>
<body>

<!------------------ submit data into your server ------------->
<?php 
    if(isset($_POST["submit"])){
        //take input data 

        //insert into you database 


        //if data submit successfully then you can redirect any whare or any thinf you can show
    }
?>


<div class="col-md-6 offset-md-3 mt-3">
    <div class="alert alert-success">
        <strong>Thank you!  </strong> <span> Payment Successfull </span>
    </div>
</div>

<div class="col-md-6 offset-md-3">
    <div class="card card-body">
        <div class="alert alert-danger">
            <strong>Please give payments information for confirmation.</strong>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Your Paypal Email</label>
                <input type="email" class="form-control" placeholder="example@gmail.com">
            </div>
            <div class="form-group">
                <label for="">Your Transection Id</label>
                <input type="text" class="form-control" placeholder="1AB23456C7890123D">
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit Information</button>
        </form>
    </div>
</div>


</body>
</html>