<!DOCTYPE html>
<html>
<head>
<title>Viewusers</title>
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>

<div class="container">
  
<h2>users</h2>
<table class="table">
<thead>
<tr>
<th>id</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Gender</th>


</tr>
</thead>
<tbody>
<?php
include "conn.php";
 $SQL=" SELECT `id`,`name`,`email`,`password`,`gender` FROM `registration`";
 $result = mysqli_query($conn,$SQL);
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['gender']; ?></td>


`<td ><a class="btn btn-info" href="edit.php?id=<?php echo
$row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="deletee.php?id=<?php
echo $row['id']; ?>">Delete</a></td>`   
</t r>
<?php }
}
?>
</tbody>
</table>
</div>
</body>
</html>




























 
