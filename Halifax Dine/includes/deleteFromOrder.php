<?php

require_once('db.php');

session_start();

if(isset($_POST['deleteFromOrder'])) {

  $OrderID = $_GET['Order_id'];

  $result = mysqli_query($conn, "DELETE FROM Orders WHERE Order_id = $OrderID");

  header("Location: ../myOrder.php");
}

?>
