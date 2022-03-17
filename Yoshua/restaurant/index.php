<?php require_once 'actions/db_connect.php'; 

$sql = 'SELECT * FROM dishes';
$result = mysqli_query($connect, $sql); // needs 2 things: connection to db and a query. $connect was defined in db_connect.php

$tbody="";

if(mysqli_num_rows($result)>0){ // if there is a record from table
    while($row = mysqli_fetch_assoc($result)){
        $tbody .= "<tr>
            <td><img class='img-thumbnail' style='height:150px' src='pictures/".$row['image']."'</td>
            <td>".$row['name']."</td>
            <td>".$row['description']."</td>            
            <td>".$row['price']."</td>
            <td><a href='update.php?id=" .$row['dish_id']."'><button class='btn btn-primary btn-sm' type='button'>Update</button></a>
            <a href='delete.php?id=" .$row['dish_id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
    }
    }else{
        $tbody="<tr><td colspan='4' class='text-center'>No Data Available</td></tr>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Day 4: Restaurant</title>
    <?php require_once 'components/boot.php'; ?>

</head>
<body>
    <div class="w-75 mt-3 mx-auto">
<div class="mb-3">
<a href="create.php"><button class='btn btn-success' type="button">Add dish</button></a>
</div>
<p class='h2 bg-dark text-light text-center'>Menu</p>
<table class='table table-hover'>
<thead class='table'>
<tr>
    <th>Picture</th>
    <th>Name</th>
    <th>Price</th>
    <th>Description</th>
    <th>Action</th>

</thead>
<tbody>
<?php echo $tbody ?>
</tbody>


</table>




    </div>  
</body>
</html>