<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newpost</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;" class="mt-3">Webboard-onii</h1>
        <?php include "nav.php" ?>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1 "></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card-header bg-primary text-white">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <form action="newpost_save.php" method="post">
                        <div class="row">
                            <label class="col-lg-3 col-from-label">หมวดหมู่:</label>
                            <div class="col-lg-9">
                                <select name="category" class="form-select">
                                    <option value="general">เรื่องทั่วไป</option>
                                    <option value="study">เรื่องเรียน</option>
                                </select>
                            </div>
                        </div> 
                            <div class="row mt-3">
                                <label class="col-lg-3 col-from-label">หัวข้อ:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="topic" class="form-control" required>
                                </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-from-label">เนื้อหา:</label>
                                <div class="col-lg-9">
                                    <textarea name="comment" rows="8" class="form-control" required></textarea>
                                </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-info btn-sm text-white me-2">
                                    <i class="bi bi-caret-right-square"></i>บันทึกข้อความ</button>
                                <button type="reset" class="btn btn-danger btn-sm"><i class="bi bi-x-square"></i>ยกเลิก</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
            <div class="col-1g-3 col-md-2 col-sm-1"></div>
        </div>
    </div><br>
</body>    

                                

    
    