<?php

 $a = $_GET['userid'];
 $b = $_GET['username'];
 $c = $_GET['useremail'];
 $d = $_GET['userphone'];



 $conn = mysqli_connect('localhost','root','','red_crud');
 $sql = "UPDATE red_data SET name = '{$b}', email = '{$c}', phone = '{$d}' WHERE id = '{$a}'";

mysqli_query($conn,$sql);
mysqli_close($conn);

header("location: http://localhost/CRUD_test/home.php")

?>