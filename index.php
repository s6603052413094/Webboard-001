<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Webboard-onii</title>
</head>
<body>
    <div class="container-lg">
    <h1 style="text-align: center;" class="mb-3">Webboard-onii</h1>
    <hr>
    <nav class="navbar navbar-expand-lg" style="background-color: darkgray;">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="bi bi-"</a>
        <div class="navbar-nav">
            <?php if(!isset($_SESSION['id'])){?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="login.php">เข้าสู่ระบบ</a>
        </li>/.new-item
        <?php }else{
            ?>
        <?php }?>
        <li class="nav-item dropdown">
          <a class="btn-outline-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>/.dropdown-meun
        </li>/.nav-item.dropdown
        
    /.navbar-nav</div>/.container-fluid
</nav>/.navbar.navber-expand-lg
    <form>
    หมวดหมู่: 
    <select name="category">
         <option value="all">---ทั้ง---</option>
         <option value="general">General</option>>เรื่องทั่วไป</option>
         <option value="study">Study</option>
    </select>
    <?php
      if (!isset($_SESSION['id'])){
        echo "<a href= login.php  style='float:right';>เข้าสู่ระบบ</a>";

      }else{
        echo"<div style='float:right;'>
              ผู้ใช้งานระบบ:$_SESSION[username]&nbsp;&nbsp;
              <a href=logout.php> ออกจากระบบ</a>
            </div> ";
        echo"<br><a href=newpost.php>สร้างกระทุ้ใหม่</a>";
            }
    ?>
  </form> 
  <ul>
  <?php
      for($i=1;$i<=10;$i++){
        echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a>";
        if(isset($_SESSION['id']) &&$_SESSION['role']=='a'){ 
          echo "&nbsp;&nbsp;<a href=delete.php?id=$i>ลบ</a>";
          }
        echo"</li>";
        }
  ?>  
  
  </ul>
    </div> 
</body>
</html>