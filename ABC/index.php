<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ABC School| Online Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<div class="top-content" style="margin-left:50px  !important; margin-right:50px  !important; margin-top:100px  !important; background-image:url('image/letter.jpg') ;">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text" style="margin-top:-60px;">
                    <center>
                        <img src="image/logo.png" style="height:50px; width:50px;" class="img-responsive" />
                    </center>
                    <h1>ABC | Online Registration</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">

                    <div class="alert alert-danger alert-dismissible" role="alert" <?php if(!isset($_GET['login'])){ echo "style='display:none;'";}?> >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></strong> Invalid login, please try again
                    </div>

                    <div class="form-top">
                        <div class="form-top-left">
                            <h3 style="color: #ffffff;">Login to our site</h3>
                            <p style="color: #ffffff;">Enter your Administrator-ID and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="module/login.php" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">AdminID</label>
                                <input type="text" name="adminId" placeholder="AdminID" class="form-username form-control" id="form-username" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="passwd" placeholder="Password" class="form-password form-control" id="form-password" required>
                            </div>
                            <button type="submit" class="btn">Log in!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>