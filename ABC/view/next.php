<?php
  include("../config/connect.php");
  include('../controller/siteController.php');
  $pdo=connect();
?>

<html lang="en">
<head>
  <title>ABC School</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <link href="../css/reg.css" media="all" rel="stylesheet" type="text/css" />
</head>


  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">

            <center><img src="../image/logo.png" align="left" class="img-responsive" alt="logo"  width="100" height="60"><h1>ABC School</h1></center>


      </div>
    </nav>

    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-xs-4 sidenav">
        </div>

        <div class="col-xs-4 text-left">
          <h3>Edit Student</h3>

          <form method="post" action="../controller/edit.php" name="addStudent">
               <div class="form-group">
                  <label>Student Name</label><br>
                  <input type="text" class="form-control" id="name" name="name" value="<?php echo $rows['name']; ?>">
               </div>
               <div class="form-group">
                  <label>Address</label><br>
                  <input type="text" class="form-control" id="address" name="address" value="<?php echo $rows['address']; ?>">
               </div>
               <div class="form-group">
                  <label>Email</label><br>
                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $rows['email']; ?>">
               </div>
               <div class="form-group">
                  <label>Telephone</label><br>
                  <input type="text" class="form-control" id="tele" name="tele" value="<?php echo $rows['tele']; ?>">
               </div>
               <a href="first.php" class="button11">Edit</a>
               <a href="first.php" class="button22">Cancel</a>


            </form>

        </div>

        <div class="col-xs-4 sidenav">
        </div>

      </div>
    </div>


  </body>
</html>
