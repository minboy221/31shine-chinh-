<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/qlydanhmuc.css">

    <title>Chi Tiết Dịch Vụ | 31Shine</title>
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
            <li class="active"><a href="?act=qlydichvu">Quản Lý Dịch Vụ</a></li>
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
                <span class="count">5</span>
            </a>

            <a href="#" class="profile">
                <img src="./anh/logochinh.424Z.png">
            </a>
        </nav>

        <!-- Main -->
        <main>
            <div class="header">
                <div class="left">
                    <h1>Chi Tiết Dịch Vụ</h1>
                </div>

                <a href="?act=qlydichvu" class="btnthem" style="padding:8px 15px;background:#ccc;">← Quay lại</a>
            </div>

            <div class="bottom-data">
                <div class="orders" style="padding: 20px; max-width: 700px; margin:auto;">

                    <div class="detail-box">
                        <p><strong>Tên dịch vụ:</strong> <?= htmlspecialchars($dichvu['name']) ?></p>

                        <p><strong>Mô tả:</strong><br>
                            <?= nl2br(htmlspecialchars($dichvu['description'])) ?>
                        </p>

                        <p><strong>Giá:</strong> <?= number_format($dichvu['price']) ?> đ</p>

                        <p><strong>Thời gian thực hiện:</strong> <?= $dichvu['time'] ?> phút</p>

                        <p><strong>Ảnh dịch vụ:</strong><br>
                            <?php if ($dichvu['image']): ?>
                                <img src="<?= BASE_URL ?>uploads/<?= $dichvu['image'] ?>" width="300"
                                     style="border-radius:10px; margin-top:10px;">
                            <?php else: ?>
                                Chưa có ảnh
                            <?php endif; ?>
                        </p>

                        <br>
                        <a href="?act=edit_dichvu&id=<?= $dichvu['id'] ?>" class="btnthem" 
                           style="padding:10px 20px; background:#ffb703; color:#000;">
                            ✏ Sửa dịch vụ
                        </a>

                    </div>

                </div>
            </div>

        </main>
    </div>

    <script src="<?= BASE_URL ?>public/admin.js"></script>
</body>

</html>
