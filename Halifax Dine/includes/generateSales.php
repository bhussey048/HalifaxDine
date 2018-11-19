<?php require_once('db.php'); ?>

<?php

session_start();

$RestID = $_GET['RestID'];
$RestCity = $_GET['Rest_City'];

echo $RestCity . " " . " sales: ";

$sql1 = "SELECT * FROM Sale WHERE Rest_id = $RestID";

$result1 = mysqli_query($conn, $sql1);


while($row = mysqli_fetch_array($result1))
  {

  $Sale_id = $row['Sale_id'];
  $Sale_date = $row['Sale_date'];
  $Sale_amount = $row['Sale_amount'];

  echo $Sale_id . " " . $Sale_date . " " . "$" . $Sale_amount;
  $totalSales += $Sale_amount;
  echo "<br />";
  }
    mysqli_close($conn);

  echo "Total Sales: " . " " . "$" . $totalSales;

?>
