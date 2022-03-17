<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php require_once 'components/boot.php'?>
       <title>Add Dish</title>
       <style>
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }      
       </style>
   </head>
   <body>
       <fieldset>
           <legend class='h2 bg-dark text-light text-center'>Add Dish</legend>
           <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
               <table class='table table-hover'>
                   <tr>
                       <th>Name</th>
                       <td><input class='form-control' type="text" name="name"  placeholder="Dish Name" /></td>
                   </tr>   
                   <tr>
                       <th>Price</th>
                       <td><input class='form-control' type="number" name= "price" placeholder="Price" step="any" /></td>
                   </tr>
                   <tr>
                       <th>Picture</th>
                       <td><input class='form-control' type="file" name="picture" /></td>
                   </tr>
                   <tr>
                       <td><button class='btn btn-success' type="submit">Add dish</button></td>
                       <td><a href="index.php"><button class='btn btn-primary' type="button">Home</button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>
   </body>
</html>