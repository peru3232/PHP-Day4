<?php
//connect to database
require_once 'actions/db_connect.php';

$sql = 'SELECT * FROM dishes';
$result = mysqli_query($connect ,$sql);
$output ='';

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $output .="
        <div class='card col-lg-3 col-md-5 col-sm-10 col-11 p-0 m-2'>
            <div class='img-task' style='background-image: url(pictures/".$row['image'].")'></div>
            <div class='card-body pb-2'>
                <h5 class='card-title'>".$row['name']."</h5>
                <p class='card-text'>".$row['ingredienties']."</p>
            </div>
            <hr>
            <div class='card-body py-2'>
                <span>€".number_format($row['price'], 2, ',', ' ')."</span>
            </div>
            <hr>
            <div class='card-body py-2'>
                <a href='details.php?dish_id=" .$row['dishID']."'><button class='btn btn-primary me-3'>Details</button></a> 
                <a href='update.php?dish_id=" .$row['dishID']."'><button class='btn btn-secondary me-3'>Edit</button></a> 
                <a href='delete.php?dish_id=" .$row['dishID']."'><button class='btn btn-danger me-3'>Delete</button></a> 
            </div>
        </div>
    ";
}

mysqli_close($connect);

?>


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP CRUD</title>
    <?php require_once 'components/boot.php'?>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<main>
    <h1 class='py-3 text-center bg-danger bg-opacity-50 display-2'>Our dishes are:</h1>
    <!-- Card Container -->
    <div class='row justify-content-center'>
        <div class="img-task text-center p-5" style="background-image: url(pics/main.jpg)"><a href='create.php'><button class='btn btn-success me-3'>Add a dish</button></a> </div>
        <div class='row justify-content-center pt-5 content-container'>
            <?= $output ?>
        </div>
    </div>

</main>
</body>
</html>