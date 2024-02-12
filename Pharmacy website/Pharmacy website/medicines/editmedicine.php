<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBDATE DATA</title>
</head>
<body>

<?php

include("conn.php");
if(isset($_GET['id']))
    {
    $med_id=$_GET['id'];
    $sql="SELECT *FROM  `medicine` WHERE `serial`=$med_id";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows >0)
        {
        while($row=$result->fetch_assoc()){
            $serial=$row['serial'];
            $medicinename=$row['name'];
            $medtype=$row['medicine_type'];
            $medprice=$row['price'];



        
    if(isset($_POST['update'])) {

        $Serial=$_POST['medserial'];
        $medicinename=$_POST['medicinename'];
        $medicinetype=$_POST['medtype'];
        $price=$_POST['medprice'];
     
        // 
        $SQL=" UPDATE  `medicine` SET
            `serial`='$Serial',`name`='$medicinename', `medicine_type`='$medicinetype',
        `price`='$price'  WHERE  `serial`='$med_id'";

        $resultupdate=$conn->query($SQL);
        if($resultupdate == TRUE)
        {
            echo "Record updated successfully.";
            header('Location: dashboard.php');
        }
        
        else{
            echo "Error:" . $resultupdate . "<br>" . $conn->error;
            }



        

    }


 ?>
   
   <h2> Update Form</h2>
        <form action="" method="post" >
        <fieldset>
        <legend>Medicine information:</legend>
        serial	:<br>
        <input type="text" name="medserial" value="<?php echo $serial ; ?>">
      <br>
        Name:<br>
        <input  type="text" name="medicinename" value="<?php echo  $medicinename;?>">
        <input type="hidden" name="med_id" value="<?php echo $id; ?>">
        <br>
        type:<br>
        <input type="text" name="medtype" value="<?php echo $medtype; ?>">
        <br>
        price:<br>
        <input type="text" name="medprice" value="<?php echo  $medprice ; ?>">
        <br>



        <br><br>
        <input type="submit" value="Update" name="update">
        </fieldset>
       
        </form>








    <?php }
}
 
}
?>
      
    
</body>
</html>


















