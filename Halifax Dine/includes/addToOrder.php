<?php

require_once('db.php');

session_start();

if(isset($_POST['addToOrder'])) {

  $MenuID = $_GET['Menu_id'];
  $UserID = $_SESSION['UserID'];

  $result = mysqli_query($conn, "INSERT INTO Orders (Menu_id, User_id) VALUES ($MenuID, $UserID)");

  header("Location: ../menu.php");
}

?>
