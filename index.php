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
        <h1 style="text-align: center;" class="mt-3">Webboard-onii</h1>

        <?php include "nav.php" ?>
            
        <div class="mt-4 d-flex justify-content-between">
        <div>
        <label>หมวดหมู่</label>
        <div class="btn-group">
            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <?php
                    if (isset($_GET['category']) && $_GET['category'] != 'all') {
                        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                        $sql = "SELECT name FROM category WHERE id = " . $_GET['category'];
                        $result = $conn->query($sql);
                        $row = $result->fetch();
                        echo $row['name'];
                    } else {
                        echo '--ทั้งหมด--';
                    }
                ?>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php">ทั้งหมด</a></li>
                <?php
                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                    $sql = "SELECT * FROM category";
                    foreach ($conn->query($sql) as $row) {
                        $selected_category = (isset($_GET['category']) && $_GET['category'] == $row['id']) ? 'active' : '';
                        echo "<li><a class='dropdown-item $selected_category' href='index.php?category=$row[id]'>$row[name]</a></li>";
                    }
                    $conn = null;
                ?>
            </ul>
        </div>
    </div>
            <?php if (isset($_SESSION['id'])) { ?>
            <div>
                <a href="newpost.php" class="btn btn-success btn-sm"><i class="bi bi-plus"></i> สร้างกระทู้ใหม่</a>
            </div>
            <?php } ?>
        </div>
 
        <table class="table table-striped mt-4">
        <?php
                $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                $category_condition = (isset($_GET['category']) && $_GET['category'] != 'all') ? 'WHERE t3.id = ' . $_GET['category'] : '';
                $sql = "SELECT t3.name, t1.title, t1.id, t2.login, t1.post_date, t2.id as user_id, t2.role FROM post as t1
                        INNER JOIN user as t2 ON (t1.user_id = t2.id)
                        INNER JOIN category as t3 ON (t1.cat_id = t3.id)
                        $category_condition
                        ORDER BY t1.post_date DESC";
                $result = $conn->query($sql);
                while ($row = $result->fetch()) {
                    echo "<tr><td class='d-flex justify-content-between'><div>[ " . $row['name'] . " ] <a href='post.php?id=" . $row['id'] . "' style='text-decoration:none'>" . $row['title'] . "</a><br>" . $row['login'] . " - " . $row['post_date'] . "</div>";
                    
                    if (isset($_SESSION['id'])) {
                        echo "<div class='me-2 align-self-center'>";
                        if ($_SESSION['id'] == $row['user_id'] || $_SESSION['role'] == 'a') {
                            echo "<a href='editpost.php?id=$row[id]' class='btn btn-warning btn-sm me-2'><i class='bi bi-pencil-fill'></i></a>";
                        
                            echo "<a href='delete.php?id=$row[id]' class='btn btn-danger btn-sm' onclick='return confirmDelete()'><i class='bi bi-trash'></i></a>";
                        }
                        echo "</div>";
                    }
                    
                    echo "</td></tr>";
                }
                $conn = null;
            ?>
        </table>

        <script>
            function confirmDelete() {
                var confDelete = confirm('ต้องการลบจริงหรือไม่');
                return confDelete;
            }
        </script>
    </div>
</body>
</html>