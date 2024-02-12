<?php
include 'conn.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM category WHERE id=$id";
    $result=$conn->query($sql);
    if($result)
    {
        header("Location:createcategory.php");
    }
    else 
    {
        echo "Error:.$sql. $conn->error";
    }

}

?>