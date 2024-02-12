<?php
include 'conn.php';
if(isset($_POST['upload'])){
    $serial=$_POST['serial'];
    $filename = $_FILES["image"]["name"];
	$tempname = $_FILES["image"]["tmp_name"];
	$tempname = $tempname;
	$folder = "images/". $filename;
    $name=$_POST['name'];
    $type=$_POST['typee'];
    $price=$_POST['price'];
    $category=$_POST['category'];
   

	 $sqlgetid="SELECT id FROM category WHERE `type`= '$category' ";
     $result=$conn->query($sqlgetid);
     $row=$result->fetch_assoc();
     $id=$row['id'];

	// Get all the submitted data from the form
	$sql = "INSERT INTO medicine (`serial`,`image`,`name`,`medicine_type`,`price`,`categoryid`) VALUES ('$serial','$filename','$name','$type','$price','$id')";

	// Execute query
	$result2= $conn->query( $sql);
    if($result2)
    {
        header("location:dashboard.php");
    }
    else
    {
        echo "ERROR: . $sql .$conn->error";
    }

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}

}


?>