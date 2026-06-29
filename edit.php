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
   <div class="addcontaner">
    <div class="addimg"><img src="img/img2.jpg" alt=""></div>
    <div class="addcontent">
      <form action="updata.php" method="get">
      <h1>edit here</h1>
      <?php
      $conn = mysqli_connect('localhost','root','','red_crud');
      $_data = $_GET['id'];
      $sql = "SELECT * FROM red_data WHERE id = {$_data}";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0){
        while($rows = mysqli_fetch_assoc($result)){
      ?>
      <input type="numbar" placeholder="Id" value="<?php echo $rows['id']?>" name="userid">
      <input type="text" placeholder="Name" value="<?php echo $rows['name']?>"  name="username">
      <div class="inputdiv">
        <input type="email" placeholder="Email" value="<?php echo $rows['email']?>"  name="useremail">
      </div>
      <div class="inputdiv">
        <input type="text" placeholder="Phone" value="<?php echo $rows['phone']?>"  name="userphone">
      </div>
      <button type="Submit" class="btn">aupdata data</button>
      <h4>This Is CRUD</h4>
      <form>
        <div class="for-btn">
          <a class="a1" href="home.php">SEE DADA</a>
          <a class="a2" href="home.php">SEE DADA</a>
  </div>
  <?php
      }
      }
  ?>
    </div>
   </div>



</div>

    
</body>
</html>