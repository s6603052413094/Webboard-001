<?php
session_start();
if (isset($_SESSION['id'])){ 
    header("location:index.php");
die();
 }
$login=$_POST['login'];
$pwd=$_POST['pwd'];
$conn =new PDO("mysql:host=localhost;dbname=app66;charset=utf8","root","");
$sql="SELECT * from user where login='$u' and password=sha1('$p')";
$result = $conn->query($sql);
if($result->rowCount()==1){
    $data = $result->fetch(PDO::FETCH_ASSOC);
    $_SESSION['username'] = $data['login'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['user_id'] = $data['id'];
    $_SESSION['id'] = session_id();
    header("location:index.php");
    die();
}else{
    $_SESSION["error"]=1;
    header("location:login.php");
    die();
}
$conn = null;
?>
