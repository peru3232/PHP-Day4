<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM dishes WHERE dish_id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
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
        <title>Edit Dish</title>
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
            
            <legend class='h2 bg-dark text-light text-center p-1  mt-3 '>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $name ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td><input class="form-control" type="text"  name="name" placeholder ="Dish Name" value="<?php echo $name ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class="form-control" type= "number" name="price" step="any"  placeholder="Price" value ="<?php echo $price ?>" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type= "text" name="description"  placeholder="Description" value ="<?php echo $description ?>" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type="file" name= "picture" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['dish_id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?php echo $data['image'] ?>" />
                        <td><a href= "index.php"><button class="btn btn-success" type="button">Back</button></a></td>
                        <td><button class="btn btn-primary" type= "submit">Save Changes</button></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        </div>
    </body>
</html>