<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Medicine</title>
    <style>
      form{
        align-items:center;
        border:1px solid black;
        padding:0.5em;
        text-align:center;
        
      }
      input{
padding:10px;
margin:8px;
 
      }
   
    </style>
</head>
<body>



      <div class="">
        <h1>Add Medicine</h1>
            <form action="insertmedicine.php" method="POST" enctype="multipart/form-data" >

            <input type="number" name="serial" placeholder="enter serial">
<br>
            <input type="file" name="image" id="" style="margin-left:80px;" >
<br>
            <input type="text" name="name" id="" placeholder="enter name">
<br>
           <select name="typee" id="">
            <option value="Tablet">Tablet</option>
           
           </select>
<br>
            <input type="text" name="price" id="" placeholder="enter price">
<br>
            <select name="category" id="">
               <?php include "conn.php";
               $SQL=" SELECT * FROM `category` ";
               $result = mysqli_query($conn,$SQL);
               if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
               ?>
           
              <option value="<?php echo $row['type'] ?>"><?php echo $row['type'] ?></option>
            <?php }}
            ?>
           </select>

<br>
             <input type="submit" name="upload" style="   width:120px">
            </form>
            

        </div>

</body>
</html>