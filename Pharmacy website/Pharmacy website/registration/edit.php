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
    $user_id=$_GET['id'];
    $sql="SELECT *FROM  `registration` WHERE `id`=$user_id";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows >0)
        {
        while($row=$result->fetch_assoc()){
            $username=$row['name'];
            $email=$row['email'];
            $password=$row['password'];
            $gender=$row['gender'];



        
    if(isset($_POST['update'])) {

        $Username=$_POST['username'];
        $Email=$_POST['email'];
        $Password=$_POST['password'];
        $CONFIRM_Password=$_POST['password'];
        $Gender=$_POST['gender'];
        // 
        $SQL=" UPDATE  `registration` SET
            `name`='$Username',`password`='$Password', `conpassword`='$Password',
        `gender`='$Gender'  WHERE  `id`='$user_id'";

        $resultupdate=$conn->query($SQL);
        if($resultupdate == TRUE)
        {
            echo "Record updated successfully.";
            header('Location: viewusers.php');
        }
        
        else{
            echo "Error:" . $resultupdate . "<br>" . $conn->error;
            }



        

    }


 ?>
   
   <h2> Update Form</h2>
        <form action="" method="post" >
        <fieldset>
        <legend>Personal information:</legend>
        Username:<br>
        <input  type="text" name="username" value="<?php echo  $username;?>">
        <input type="hidden" name="user_id" value="<?php echo $id; ?>">
        <br>
        Email:<br>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <br>
        Password:<br>
        <input type="text" name="password" value="<?php echo  $password ; ?>">
        <br>

        Gender	:<br>
        <input type="text" name="gender" value="<?php echo $gender ; ?>">
      


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


















