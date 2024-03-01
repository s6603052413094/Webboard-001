<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">Webboard-onii</h1>
        <?php include "nav.php" ?>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
            <div class="col-lg-4 col-md-6 col-sm-8 col-10">
                <div class="card-header bg-primary text-white">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <form action="register_save.php" method="post">
                        <div class="row">
                            <label class="col-lg-4 col-md-3 col-from-label">ชื่อบัญชี:</label>
                            <div class="col-lg-9">
                                <input type="text" name="login" class="form-control" required>                                
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label class="col-lg-4 col-md-3 col-from-label">รหัสผ่าน:</label>
                            <div class="col-lg-9">
                                <input type="password" name="pwd" class="form-control" required>
                            </div>
                        </div>
<div class="row mt-3">
    <label class="col-lg-4 col-md-3 col-from-label">ชื่อ-นามสกุล:</label>
    <div class="col-lg-9">
        <input type="text" name="name" class="form-control" required>
    </div>
</div>
<div class="row mt-3">
    <label class="col-lg-4 col-md-3 col-from-label">เพศ:</label>
    <div class="col-lg-9">
        <div class="form-check">
            <input type="radio" name="gender" value="m" class="form-check-input" required>
            <label class="form-check">ชาย</label>
    </div>
    <div class="col-lg-9">
        <div class="form-check">
            <input type="radio" name="gender" value="f" class="form-check-input" required>
            <label class="form-check">หญิง</label>
    </div>
    <div class="col-lg-9">
        <div class="form-check">
            <input type="radio" name="gender" value="o" class="form-check-input" required>
            <label class="form-check">อื่นๆ</label>
        </div>
    </div>
</div>
                        <div class="row mt-3">
                            <label class="col-lg-3 col-from-label">เพศ:</label>
                            <div class="col-lg-9">
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-sm me-2">
                                    <i class="bi bi-save"></i> สมัครสมาชิก</button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="bi bi-x-square"></i> ยกเลิก</button>
                            </div>
                        </div>
                    </form> 
                </div>    
            </div>
        </div>            
        <div class="col-lg-3 col-md-2 col-sm-1"></div>
    </div>
    <br>
</body>



 