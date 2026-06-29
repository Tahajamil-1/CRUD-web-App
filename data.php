<?php
echo $a = $_GET['userid'];
echo $b = $_GET['username'];
echo $c = $_GET['useremail'];
echo $d = $_GET['userphone'];



$conn = mysqli_connect('localhost','root','','red_crud');
$sql = "INSERT INTO red_data (id,name,email,phone) VALUES('{$a}','{$b}','{$c}','{$d}')";
$result = mysqli_query($conn,$sql);

mysqli_close($conn);

header("location: http://localhost/CRUD_test/Add.php")

?>
