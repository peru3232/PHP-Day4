<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM dishes WHERE dish_id = {$id}" ;
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $name = $data['name'];
        $price = $data['price'];
        $description = $data['description'];
        $picture = $data['image'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Dish</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">

            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
                object-fit: cover;
            }    
        </style>
    </head>
    <body>
    <div class="container-fluid bg-light mx-auto">

        <fieldset class="w-75 mt-3 mx-auto">

            <legend class='h2 bg-dark text-light text-center p-3  mt-3 '>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $name ?>"></legend>
            <h5>You have selected the following menu item:</h5>
            <table class="table w-75 mt-3">
                <tr>
                <th>Dish Name</th>
                    <td><?php echo $name?></td>
                </tr>
                <tr>
                <th>Price</th>
                    <td><?php echo $price?></td>
                </tr>
                <tr>
                <th>Description</th>
                    <td><?php echo $description?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this product?</h3>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="picture" value="<?php echo $picture ?>" />
                <a href="index.php"><button class="btn btn-success" type="button">Back</button></a>
                <button class="btn btn-danger" type="submit">Delete</button>
                
            </form>
        </fieldset>
        </div>
    </body>
</html>