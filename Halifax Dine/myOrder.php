<?php include('includes/header.php'); ?>

<?php

$result = mysqli_query($conn, "SELECT * FROM Menu join Orders on Menu.Menu_id = Orders.Menu_id");

while($row = mysqli_fetch_array($result))

  {

  $MenuID = $row['Menu_id'];
  $MenuName = $row['Menu_name'];
  $MenuDiet = $row['Menu_diet'];
  $MenuPrice = $row['Menu_price'];
  $OrderID = $row['Order_id'];

  echo $MenuName . " " . $MenuDiet . " " . $MenuPrice . " " . "<form action=includes/deleteFromOrder.php?Order_id=$OrderID method=post><button class=btn btn-lg btn-primary btn-block type=submit name=deleteFromOrder>Delete</button></form>";
  $subtotal += $MenuPrice;
  echo "<br />";

  }

  mysqli_close($conn);

  echo "Subtotal: " . $subtotal * 1;
  echo "<br />";
  $total = $subtotal * 1.15;
  echo "Tax: " . $subtotal * 0.15;
  echo "<br />";
  echo "Total: " . $total;

  echo "<form action=includes/checkout.php?total=$total method=post><button class=btn btn-lg btn-primary btn-block type=submit name=checkout>Checkout</button></form>";

 ?>


<?php include('includes/footer.php'); ?>
