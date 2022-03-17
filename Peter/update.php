<?php
require_once 'actions/db_connect.php';

if ($_GET['dish_id']) {
    $id = $_GET['dish_id'];
    $sql = "SELECT * FROM dishes WHERE dishID = $id";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $name = $data['name'];
        $price = $data['price'];
        $image = $data['image'];
        $description = $data['description'];
        $ingredienties = $data['ingredienties'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: 100px auto auto;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt="<?php echo $name ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td><input class="form-control" type="text"  name="name" placeholder ="Product Name" value="<?php echo $name ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class="form-control" type= "number" name="price" step="any" placeholder="Price" value ="<?php echo $price ?>" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><textarea  class="form-control"  name="description" rows="5" ><?php echo $description ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Ingredienties</th>
                        <td><textarea  class="form-control"  name="ingredienties" rows="3" ><?php echo $ingredienties ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type="file" name= "picture" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "dish_id" value= "<?php echo $id ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $image ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>