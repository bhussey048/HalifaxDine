<?php

require_once('db.php');

session_start();

$UserID = $_SESSION['UserID'];
$total = $_GET['total'];

$sql = "INSERT INTO Sale (Sale_id, Sale_date, Sale_amount) VALUES (3, now(), $total)";

$result = mysqli_query($conn, $sql);
//update this to incorporate userid once fixed
//should delete all orders based on user id

$sql1 = "DELETE FROM Orders WHERE User_id = $UserID";

$result1 = mysqli_query($conn, $sql1);

header("Location: ../index.php");


 ?>
