<?php include('includes/header.php'); ?>

<?php

$sql = "SELECT * FROM Menu";

$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_array($result))
  {

  $MenuID = $row['Menu_id'];
  $MenuName = $row['Menu_name'];
  $MenuDiet = $row['Menu_diet'];
  $MenuPrice = $row['Menu_price'];

  echo $MenuName . " " . $MenuDiet . " " . $MenuPrice . " " . "<form action=includes/addToOrder.php?Menu_id=$MenuID method=post><button class=btn btn-lg btn-primary btn-block type=submit name=addToOrder>Add to Order</button></form>";
  echo "<br />";
  }
    mysqli_close($conn);

 ?>


<?php include('includes/footer.php'); ?>
