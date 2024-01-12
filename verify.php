<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard-onii</h1>
    <hr>
    <div style="text-align: center;">
        <?php
        $login=$_POST['login'];
        $pwd=$_POST['pwd'];
        if($login=="admin" && $pwd=="ad1234"){
            echo "ยินดีต้อนรับคุณ ADMIN";
        } else if($login=="member" && $pwd=="mem1234"){
            echo "ยินดีต้อนรับคุณ member";
        } else{
            echo "ชื่อบัญชีของท่านไม่ถูกค้อง";
        }

        echo "<BR> <a href='index.php'>กลับไปหน้าหลัก</a>"
        ?>
    </div>
</body>
</html>