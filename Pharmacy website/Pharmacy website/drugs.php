<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
.input {
  width: 100%;
  max-width: 30%;
  height: 45px;
  padding: 12px;
  margin-left:70px;
  border-radius: 12px;
  border: 1.5px solid lightgrey;
  outline: none;
  transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
  box-shadow: 0px 0px 20px -18px;
}

.input:hover {
  border: 2px solid lightgrey;
  box-shadow: 0px 0px 20px -17px;
}

.input:active {
  transform: scale(0.95);
}

.input:focus {
  border: 2px solid grey;
  max-width: 300px;
}

            .card {
            max-width: 300px;
            border-radius: 0.5rem;
            background-color: #fff; 
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            border: 1px solid transparent;
            padding  :10px;
            width:250px;
            height:370px;
            }

            .card a {
            text-decoration: none
            }

            .content {
            padding: 1.1rem;
            }

            .image {
            object-fit: cover;
            width: 100%;
            height: 150px;
            background-size: cover;
            background-color: rgb(239, 205, 255);
            }

            .title {
            color: #111827;
            font-size: 1.125rem;
            line-height: 1.75rem;
            font-weight: 600;
            }

            .desc {
            margin-top: 0.5rem;
            color: #6B7280;
            font-size: 0.875rem;
            line-height: 1.25rem;
            }

            .action {
            display: inline-flex;
            margin-top: 1rem;
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 500;
            align-items: center;
            gap: 0.25rem;
            background-color: #2563EB;
            padding: 4px 8px;
            border-radius: 4px;
            width: 100%;
            }

            .action span {
            transition: .3s ease;
            }

            .action:hover span {
            transform: translateX(4px);
            }

            .box{
                padding :30px;
                display: grid;
                grid-template-columns: repeat(6, 1fr);
                gap: 30px;
          margin-bottom:100px;

            }

    </style>
</head>
<body>

<?php include('navbar.php'); ?>

<div style="margin-top:90px">
    <input placeholder="Searth the internet..." type="text" name="text" class="input">
    <br><br>
    <div style="padding:10px" class="box">
     
     <?php
      include "conn.php";
      $SQL=" SELECT * FROM `medicine` join `category` ON category.id = medicine.categoryid" ;
      $result = mysqli_query($conn,$SQL);
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      ?>

    <div class="card">
    <div class="image" ><img class="image"  src="medicines/images/<?php echo $row['image']; ?>" alt=""width="" height="150px"> </div>
    <div class="content">
        <a href="#">
       Name: <span class="title">
        <?php echo $row['name']; ?>
        </span>
        </a>

        <p class="desc">
       Category:  <?php echo $row['type']; ?>
        </p>
        <p class="desc">
      Price:  <?php echo $row['price']; ?>
        </p>
        <p class="desc">
       Type:   <?php echo $row['medicine_type']; ?>
        </p>

        <a class="action" href="#">
        Find out more
        <span aria-hidden="true">
            →
        </span>
        </a>
    </div>
</div>
<?php }}?>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>