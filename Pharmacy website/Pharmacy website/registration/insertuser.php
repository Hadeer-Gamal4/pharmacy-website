<?php

include("conn.php");

$user=$_POST['name'];
$email=$_POST["email"];
$phone=$_POST["phone"];
$dateofbirth=$_POST["dob"];
$gender=$_POST["gender"];
$password=$_POST["password"];
$cofpass=$_POST["confirmPassword"];


// if(isset($_POST['upload'])){

    if(strlen($password)<8){
        echo '<script>alert("Password must be more than 7 character")</script>';
        // header("Location:../signup.php");
        
        return false;

    }
    if($password !==$cofpass){
        echo '<script>alert("Passworddoes not matched")</script>';
        return false;

    }

    $sqlselect="SELECT email FROM registration WHERE `email`='$email'";
    $selectreturn=$conn->query($sqlselect);
    $num = mysqli_num_rows($selectreturn);
    
    if($num>0 )
    {

        echo '<script>alert("Email alredy used...!")</script>';
        return false;
        
    }
    else
    {
        $sql="INSERT INTO `registration`( `name`, `email`, `phonenum`, `dateofbirth`, `gender`, `password`, `conpassword`, `status`) 
        VALUES ('$user','$email','$phone','$dateofbirth','$gender','$password','$cofpass','0')";
        $result=$conn->query($sql);
        if ($result) {
          header('Location:..\login.php'); 
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }
    // }
 


?>