<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>PHP CRUD  |  Add Product</title>
        <style>
            fieldset {
                margin: 100px auto auto;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Adding Dishes</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Name</th>
                        <td><input class='form-control' type="text" name="name"  placeholder="Product Name" /></td>
                    </tr>    
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="number" name= "price" placeholder="Price" step="any" /></td>
                    </tr>
                    <tr>
                    <tr>
                        <th>Description</th>
                        <td><textarea  class="form-control"  name="description" rows="5" placeholder="some description"></textarea></td>
                    </tr>
                    <tr>
                        <th>Ingredienties</th>
                        <td><textarea  class="form-control"  name="ingredienties" rows="3"  placeholder="some description"></textarea></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="image" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert this Dish</button></td>
                        <td><a href="index.php"><button class='btn btn-secondary' type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>