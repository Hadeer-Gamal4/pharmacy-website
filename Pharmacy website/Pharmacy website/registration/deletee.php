<?php
include "conn.php";
if (isset($_GET['id'])) {
$user_id = $_GET['id'];
$sql = "DELETE FROM `registeration` WHERE `id`='$user_id'";
$result = $conn->query($sql);
if ($result == TRUE) {
echo "Record deleted successfully.";
header('Location: viewusers.php');
}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}
}
?>