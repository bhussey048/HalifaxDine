<?php include('includes/header.php'); ?>

<p class="lead">
  <!--<a href="menu.php" class="btn btn-lg btn-secondary">Menu</a>-->
  <div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Select Location
    </button>
    <div class="dropdown-menu">
    <?php
    $sql = "SELECT * FROM Restaurant";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)) {

      $RestID = $row['Rest_id'];
      $RestCity = $row['Rest_City'];
      $RestTaxRate = $row['Rest_TaxRate'];

      echo  "<a class=dropdown-item name=location method=post href=sales.php?Rest_City=$RestCity&Rest_id=$RestID>$RestCity</a>";
      echo  "<div class=dropdown-divider></div>";

    }
      echo  "<a class=dropdown-item name=location method=post href=sales.php>All Branches</a>";
    //mysqli_close($conn);

    ?>

    </div>
  </div>
</p>

<?php

$RestID = $_GET['Rest_id'];
$RestCity = $_GET['Rest_City'];

echo $RestCity . " " . " sales: ";
echo "<br />";

$sql = "SELECT * FROM Sale WHERE Rest_id = $RestID";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
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


<?php include('includes/footer.php'); ?>
