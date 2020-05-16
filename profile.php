<?php 
    session_start();
    if(!isset($_SESSION['user']['loggedin'])){
        header('Location: index.php?status=error$message=Please login to your account');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="
    sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
        <div class="container">
            <div class="row align-items-center" style="min-height:100vh;">
                <div class="col-md-6 offset-md-3">
                    <h1>My Profile page</h1>
                    <p class="alert alert-success"><strong>Welcome: </strong><?= $_SESSION['user']['email']; ?></p>
                </div>
            </div>
        </div>
</body>
</html>