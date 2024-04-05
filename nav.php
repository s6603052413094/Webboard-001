<nav class="navbar navbar-expand-sm" style="background-color: #d3d3d3;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <i class="bi bi-house-door-fill"></i> Home
        </a>
        <ul class="navbar-nav">
            <?php
                if (!isset($_SESSION['id'])) {
                    echo "<li class='nav-item'>
                            <a class='nav-link' aria-current='page' href='login.php'><i class='bi bi-pencil-square'></i> Login</a>
                        </li>";
                } else {
                    echo "<li class='nav-item dropdown'>
                            <a class='btn btn-outline-secondary dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='bi bi-person-lines-fill'></i>
                                $_SESSION[username]
                            </a>
                            <ul class='dropdown-menu'>";
                                if ($_SESSION['role'] == 'a') {
                                    echo "<a class='dropdown-item' href='category.php'><i class='bi bi-bookmarks'></i> จัดการหมวดหมู่</a>
                                          <a class='dropdown-item' href='#'><i class='bi bi-person-check'></i> จัดการผู้ใช้งาน</a>";
                                }
                                echo "<a class='dropdown-item' href='logout.php'>
                                    <i class='bi bi-power'></i> ออกจากระบบ
                                </a>
                            </ul>
                        </li>";
                }
            ?>
        </ul>
    </div>
</nav>