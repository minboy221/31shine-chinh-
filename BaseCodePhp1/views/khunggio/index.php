<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="public/homeadmin.css">
    <title>Quản Lý Khung Giờ | 31Shine</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class="bi bi-scissors"></i>
            <div class="logo-name"><span>31</span>Shine</div>
        </a>
        <ul class="side-menu">
            <li><a href="index.php?page=homeadmin">Thống Kê</a></li>
            <li><a href="#">Quản Lý Danh Mục</a></li>
            <li><a href="#">Quản Lý Dịch Vụ</a></li>
            <li><a href="#">Quản Lý Đặt Lịch</a></li>
            <li><a href="#">Quản Lý Nhân Viên</a></li>
            <li class="active"><a href="index.php?page=khunggio">Quản Lý Khung Giờ</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Đăng Xuất
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form>
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i><span class="count">3</span>
            </a>
            <a href="#" class="profile">
                <img src="./anh/logochinh.424Z.png" alt="Profile">
            </a>
        </nav>

        <!-- Main -->
        <main>
            <div class="header">
                <h1>Danh Sách Khung Giờ</h1>
            </div>

            <a href="index.php?page=khunggio_create" class="btn-add">+ Thêm Khung Giờ</a>

            <div class="table-container">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Khung giờ</th>
                            <th>Ngày</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($items) && $items): ?>
                            <?php while($item = $items->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['time'] ?></td>
                                    <td><?= $item['date'] ?></td>
                                    <td>
                                        <a class="btn-edit" href="index.php?page=khunggio_edit&id=<?= $item['id'] ?>">Sửa</a>
                                        <a class="btn-delete" href="index.php?page=khunggio_delete&id=<?= $item['id'] ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" style="text-align:center;">Không có dữ liệu</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>
