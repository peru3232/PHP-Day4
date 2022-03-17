<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
       <title>Add Dish</title>
       <?php require_once 'components/boot.php'?>

   </head>
   <body>
   <div class="container-fluid bg-light mx-auto">
       <fieldset class="w-75 mt-3 mx-auto">

           <legend class='h2 bg-dark text-light text-center p-3  mt-3 '>Add Dish</legend>
           
           <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
               <table class='table table-hover'>
                   <tr>
                       <th>Dish Name</th>
                       <td><input class='form-control' type="text" name="name"  placeholder="Spaghetti" /></td>
                   </tr>   
                   <tr>
                       <th>Price</th>
                       <td><input class='form-control' type="number" name= "price" placeholder="12" step="any" /></td>
                   </tr>
                   <tr>
                        <th>Description</th>
                        <td><input class="form-control" type= "text" name= "description"  placeholder="Homemade pasta and sauce" /></td>
                    </tr>
                   <tr>
                       <th>Picture</th>
                       <td><input class='form-control' type="file" name="picture" /></td>
                   </tr>
                   
                   <tr>
                     <td><a href="index.php"><button class='btn btn-success' type="button">Back</button></a></td>
                     <td><button class='btn btn-primary' type="submit">Add dish</button></td>
                   </tr>
               </table>
           </form>
       </fieldset>
        </div>
   </body>
</html>