<?php
include 'conn.php';


$categoryname=$_POST['categorytype'];

if(isset($_POST['categorytype'])){

    $sql="INSERT INTO `category`(`type`) VALUES ('$categoryname')";
    $result=$conn->query($sql);
    if($result){
        echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
      //  echo "added category '$categoryname'";
        header("Location:createcategory.php");
    }
    else{
        echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
        // echo '<script> alert("The category type already exist.")</script>';
    }

}
