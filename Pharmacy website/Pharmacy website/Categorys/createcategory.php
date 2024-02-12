<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" 
               href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
    <title>Add Medicine</title>
</head>
<body  >
      <div class="categoryform">

        <form action="insertcategory.php" method="post" class="form1">
           <lable for="n">Name Of Category</lable>
           <input type="text" id="n"  name="categorytype" required>
           <br>
           <input type="submit" value="Add" class="btn btn-info" class="btn1" >  
          
        </form>

   </div>

   <div>
               <div class="container">
               <h2 style="margin-left:20%;width:600px">Categories</h2>
               <table class="table" style="margin-left:20%;width:600px">
               <thead>
               <tr>
               <th>id</th>
               <th>Type</th>
               </tr>
               </thead>
               <tbody>
               <?php
               include "conn.php";
               $SQL=" SELECT * FROM `category` WHERE 1";
               $result = mysqli_query($conn,$SQL);
               if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
               ?>
               <tr>
               <td><?php echo $row['id']; ?></td>
               <td><?php echo $row['type']; ?></td>
               
               <td><a style="margin-left:40%;"class="btn btn-info" href="editcategory.php?id=<?php echo
               $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="deletecategory.php?id=<?php
               echo $row['id']; ?>">Delete</a></td>
               </tr>
               <?php }
               }
               
                ?>
                 </div>
     </div>
</tbody>
</table>
</body>
</html>

