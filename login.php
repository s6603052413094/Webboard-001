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
        <h1 style="text-align: center;" class="mt-3">Webboard-onii</h1>

        <?php include "nav.php" ?>
        
        <div class="row mt-4 mb-4">
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
            <div class="col-lg-4 col-md-6 col-sm-8 col-10">

                <?php
                    session_start();
                    
                    if (isset($_SESSION['error'])) {
                        echo "<div class='alert alert-danger'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
                        unset($_SESSION['error']);
                    }
                ?>

                <div class="card">
                    <div class="card-header">
                        เข้าสู่ระบบ
                    </div>
                    <div class="card-body">
                        <form action="verify.php" method="POST">
                            <div class="form-group">
                                <label for="user" class="form-label">ชื่อบัญชี :</label>
                                <input type="text" id="user" name="login" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="pwd" class="form-label">รหัสผ่าน :</label>
                                <div class="input-group">
                                    <input type="password" name="pwd" id="pwd" class="form-control" required>
                                    <span class="input-group-text" onclick="PasswordVisibility()">
                                        <i class="bi bi-eye-fill" id="show_eye"></i>
                                        <i class="bi bi-eye-slash-fill d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-secondary btn-sm me-1" role="button" value="login">Login</button>
                                <button type="reset" class="btn btn-danger btn-sm ms-1" role="button" value="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
        </div>

        <div style="text-align: center;">
            สมัครสมาชิก<a href="register.php">คลิก</a>
        </div>
        <script>
            function PasswordVisibility() {
                var password = document.getElementById("pwd");
                var show_eyeIcon = document.getElementById("show_eye");
                var hide_eyeIcon = document.getElementById("hide_eye");
                hide_eyeIcon.classList.remove("d-none");
                if (password.type === "password") {
                    password.type = "text";
                    // show_eyeIcon.classList.add("d-none");
                    // hide_eyeIcon.classList.add("d-block");
                    show_eyeIcon.style.display="none";
                    hide_eyeIcon.style.display="block";
                } else {
                    password.type = "password";
                    // show_eyeIcon.classList.remove("d-none");
                    // show_eyeIcon.classList.add("d-block");
                    // hide_eyeIcon.classList.add("d-none");
                    show_eyeIcon.style.display="block";
                    hide_eyeIcon.style.display="none";
                }
            }
        </script>
    </div>
</body>
</html>