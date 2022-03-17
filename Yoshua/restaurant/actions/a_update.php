<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {    
    $name = $_POST['name']; // attribute "name" from update.php form
    $price = $_POST['price'];
    $description = $_POST['description'];
    $id = $_POST['id'];
    //variable for upload pictures errors is initialised
    $uploadError = '';

    $picture = file_upload($_FILES['picture']);//file_upload() called  
    if($picture->error===0){
        ($_POST["picture"]=="dish.png")?: unlink("../pictures/$_POST[picture]"); // unlink deletes old picture, also refers to the "name" attribute       
        $sql = "UPDATE dishes SET name = '$name', price = $price, description = '$description', image = '$picture->fileName' WHERE dish_id = {$id}";
    }else{
        $sql = "UPDATE dishes SET name = '$name', price = $price, description = '$description' WHERE dish_id = {$id}";
    } 
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);    
} else {
    header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container-fluid bg-light mx-auto">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-success" type='button'>Back</button></a>
            </div>
        </div>
    </body>
</html>