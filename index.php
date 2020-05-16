<?php  require_once './includes/functions.php'; ?>
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
                    <h1>My Website</h1>
                    <form action = "<?= base_url(); ?>" method = "post">
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password"class="form-control" name="password" placeholder="Password" >
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Log In</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>