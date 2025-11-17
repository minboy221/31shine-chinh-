<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/qlydanhmuc.css">

    <title>Quản Lý Dịch Vụ | 31Shine</title>
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
            <li><a href="?act=homeadmin">Thống Kê</a></li>
            <li><a href="#">Quản Lý Danh Mục</a></li>
            <li class="active"><a href="#">Quản Lý Dịch Vụ</a></li>
            <li><a href="#">Quản Lý Đặt Lịch</a></li>
            <li><a href="#">Quản Lý Nhân Viên</a></li>
            <li><a href="#">Quản Lý Khung Giờ</a></li>
        </ul>

        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bx-log-out-circle'></i> Đăng Xuất
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">

        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="#" class="profile">
                <img src="./anh/logochinh.424Z.png">
            </a>
        </nav>

        <!-- Main -->
        <main>
            <div class="header">
                <div class="left">
                    <h1>Quản Lý Dịch Vụ</h1>
                </div>
            </div>

            <div class="bottom-data">
                <div class="orders">

                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Dịch Vụ</h3>

                        <div class="btn">
                            <a href="?act=create_dichvu" class="btnthem">+ Thêm Dịch Vụ</a>
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên Dịch Vụ</th>
                                <th>Mô Tả</th>
                                <th>Giá</th>
                                <th>Thời Gian (phút)</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach ($dichvu as $item): ?>
                                <tr>
                                    <td>
                                        <img src="<?= BASE_URL ?>uploads/<?= $item['image'] ?>" width="80" style="border-radius:8px">
                                    </td>

                                    <td><?= $item['name'] ?></td>

                                    <td><?= substr($item['description'], 0, 50) ?>...</td>

                                    <td><?= number_format($item['price']) ?> đ</td>

                                    <td><?= $item['time'] ?> phút</td>

                                    <td>
                                        <a class="btnsua" href="?act=edit_dichvu&id=<?= $item['id'] ?>">">Sửa</a>
                                        <a class="btnxem" href="?act=detail_dichvu&id=<?= $item['id'] ?>">Xem</a>


                                        <a class="btnxoa"
                                           onclick="return confirm('Bạn chắc chắn muốn xoá dịch vụ này?')"
                                           href="?act=delete_dichvu&id=<?= $item['id'] ?>">
                                           Xoá
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>

        </main>
    </div>

    <script src="<?= BASE_URL ?>public/admin.js"></script>
</body>

</html>
