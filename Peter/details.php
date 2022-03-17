<?php

require_once 'actions/db_connect.php';

$sql = "SELECT * FROM dishes where dishID = $_GET[dish_id]";
$result = mysqli_query($connect ,$sql);
$output='';

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$output .=  "
<h1 class='pt-3 text-center bg-danger bg-opacity-50 display-2'>Details</h1>
<!-- Content Container -->
<div class='row justify-content-center pt-5'>
  <div class='row justify-content-center content-container'>
      <div class='card col-6 p-0 m-2'>
        <div class='img-task' style='background-image: url(pictures/".$row['image'].")'></div>
        <div class='p-3'>
          <h5 class='card-title'>".$row['name']."</h5>
          <p class='card-text'>".$row['description']."</p>
          <p class='card-text'>Ingredients: ".$row['ingredienties']."</p>
        </div>
        <div class='px-3'>
            <p class='border-2 border-top border-bottom py-2 mb-0'>€".number_format($row['price'], 2, ',', ' ')."</p>
        </div>
        <div class='py-2 text-center'>
            <a href='index.php'><button class='btn btn-primary mx-2'>Back</button></a>
            <button class='btn btn-success mx-2'>Order</button>
        </div>
      </div>
  </div>
</div>
";

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <?php require_once 'components/boot.php'?>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<?= $output ?>
</body>
</html>