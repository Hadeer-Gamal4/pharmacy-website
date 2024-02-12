

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
    <title>Dashboard</title>
</head>
<body  >
 

   <div>
               <div class="container">
               <h2  >Medicines</h2>
               <table class="table"  >
               <thead>
               <tr>
               <th>serial</th>
               <th>image</th>
               <th>Name</th>
               <th>Type</th>
               <th>price</th>
               <th>Category</th>
            
               </tr>
               </thead>
               <tbody>
               <?php
               include "conn.php";
               $SQL=" SELECT medicine.serial,medicine.image,medicine.name,medicine.medicine_type,medicine.price,category.type 
                FROM `medicine`  JOIN category ON medicine.categoryid=category.id";
               $result =$conn->query($SQL);
               if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
               ?>
               <tr>
               <td><?php echo $row['serial']; ?></td>
               <td><img src="<?php echo "images/".$row['image']; ?>" alt="" width=150px height=></td>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['medicine_type']; ?></td>
               <td><?php echo $row['price']; ?></td>
               <td><?php echo $row['type']; ?></td>
               
               <td><a class="btn btn-info" href="editmedicine.php?id=<?php echo
               $row['serial']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="deletemedicine.php?id=<?php
               echo $row['serial']; ?>">Delete</a></td>
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

