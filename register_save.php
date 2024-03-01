<?php
if(isset($login=$_POST['login'])){;
    $passwd=$_POST['pwd'];
    $name=$_POST['name'];
    $genber=$_POST['gender'];
    $email=$_POST['email'];


$con=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
$sql"SELECT * FROM user where login='$login'";
$result=$conn->query($sql);
if($result->rowCount()==1){
    $_SESSION['add_login']="error";
}else{
    $sql="INSERT INTO user (login,password,name,gender,email,role)
    VALUES ('$login','$passwrd','$name','$gender','$email','m')";
    $conn->exec($sql1);
    $_SESSION['add_login']="success";
}
$con=null;
header("location:register.php");
die();
?>


