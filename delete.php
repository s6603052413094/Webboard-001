<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
    $id=$_GET['id'];
    echo "ลบกะทู้ หมายเลย$id";
}else{
    header("location:index.php");
    die();
}
?>