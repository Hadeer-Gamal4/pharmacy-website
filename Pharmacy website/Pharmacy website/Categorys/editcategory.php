
<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql="Select * from category where id=$id";
    $result=$conn->query($sql);
    if($result ->num_rows > 0) {    
        while($row = $result->fetch_assoc()) {
            $categorytype=$row['type']; 
    }
    }

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Category</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="categoryform">

<form action="" method="post" class="form1">
   <lable for="n">Type of category</lable>
   <input type="text" id="n"  name="updatecategorytype" required  value="<?php echo $categorytype?>">
   <input type="submit" value="update">
 
</form>

</div>
</body>
</html>


<?php
include 'conn.php';
if(isset($_POST['updatecategorytype'])){
    $id=$_GET['id'];
    $newtype=$_POST['updatecategorytype'];
    echo $newtype;
     $sqlubdate="UPDATE `category` SET `type`='$newtype' WHERE   id=$id";           
    $result2 = $conn->query($sqlubdate);
    if($result2 ) {
    
        header("Location:createcategory.php");
    }
    else{
        echo "Error: .$sqlubdate .$conn->error";
    }
     }
    
?>