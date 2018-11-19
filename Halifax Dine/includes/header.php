<?php

require_once('includes/db.php');

session_start();

/*if(isset($_SESSION['loggedIn'])){
    $loggedin = true;
    $username = $_SESSION['username'];
    $user_role = $_SESSION['user_role'];
}
else{
    $loggedin = false;
}*/

$_SESSION['UserID'] = 1;

$UserID = $_SESSION['UserID'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v4-alpha.getbootstrap.com/favicon.ico">

    <title>Halifax Dine</title>

    <!-- Bootstrap core CSS -->
    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://v4-alpha.getbootstrap.com/examples/cover/cover.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </head>

  <body>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Halifax Dine</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="index.php">Home</a>
                <?php

                if($loggedin) {
                  echo '<a class="nav-link" href="../myOrder.php">My Order</a>';
                  echo '<a class="nav-link" href="logout.php">Log Out</a>';
                }

                else {
                  echo '<a class="nav-link" href="login.php">Log In</a>';
                  echo '<a class="nav-link" href="../myOrder.php">My Order</a>';
                  echo '<a class="nav-link" href="../sales.php">Sales Overview</a>';
                }

                ?>
              </nav>
            </div>
          </div>
  </body>
