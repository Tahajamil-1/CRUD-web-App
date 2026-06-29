<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="backgroundimg">
<div class="home-main">
    <div class="home-header">
        <a href="Add.php">BACK</a>
        <div class="header-img"></div>
    </div>
    <h1>READ</h1>
  <table>
    <?php
    $conn = mysqli_connect('localhost','root','','red_crud');
    $sql = "SELECT * FROM red_data";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
    ?>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>email</th>
        <th>class</th>
        <th>Action</th>
    </thead>
    <?php
    while($rows = mysqli_fetch_assoc($result)){
    ?>
    <tr>
       <td><?php echo $rows['id']?></td>
       <td><?php echo $rows['name']?></td>
       <td><?php echo $rows['email']?></td>
       <td><?php echo $rows['phone']?></td>
       <td>
        <a class="a4" href="edit.php?id=<?php echo $rows['id'] ?>">edit</a>
        <a class="a3" href="delete.php?id=<?php echo $rows['id'] ?>">delete</a>
       </td>
    </tr>
     <?php
    }
  }
  ?>
  </table>


</div>



</div>
    
</body>
</html>