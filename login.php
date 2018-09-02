<?php
session_start();
require("include/config.php");
require("include/lang.php");
require("include/function.php");
if(isset($_POST['submit'])){
$user = $_POST['user'];
$pass = md5($_POST['pass']);
$query = $bdd->prepare("select * from user where user=? and passwd=?");
$query-> execute(array($user,$pass));
if ($query->rowCount()){
$fetch = $query->fetch(PDO::FETCH_ASSOC);
$_SESSION['user']=$fetch[user];}

}


if (isset($_SESSION['user'])){ header("Location: $home_patch");} else
{
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Heras Admin Control Panel">
  <meta name="author" content="Heras">
  <meta name="keyword" content="Heras Admin Control Panel">
  <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

  <title>Heras Admin Control Panel</title>

  <!-- Icons -->
  <link href="vendors/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/css/simple-line-icons.min.css" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Styles required by this views -->

</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
<form action="" method="POST">
              <h1>Login</h1>
              <p class="text-muted">Login</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Username" name="user">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" name="pass">
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="button" class="btn btn-primary px-4" name="submit">Login</button>
                </div>

              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="vendors/js/jquery.min.js"></script>
  <script src="vendors/js/popper.min.js"></script>
  <script src="vendors/js/bootstrap.min.js"></script>

</body>
</html>



<?php

}





?>
