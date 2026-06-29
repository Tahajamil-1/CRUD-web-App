<?php
  
$a = $_GET['id'];



$conn = mysqli_connect('localhost','root','','red_crud');
$sql = "DELETE FROM red_data WHERE id = '{$a}'";
mysqli_query($conn,$sql);
mysqli_close($conn);


header("location: http://localhost/CRUD_test/home.php");
?>