<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="public/homeadmin.css">
    <title>Thêm Khung Giờ | 31Shine</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
</head>

<body>

    <div class="sidebar">
        <a class="logo">
            <i class="bi bi-scissors"></i>
            <div class="logo-name"><span>31</span>Shine</div>
        </a>
        <ul class="side-menu">
            <li><a href="#">Thống Kê</a></li>
            <li><a href="#">Quản Lý Danh Mục</a></li>
            <li><a href="#">Quản Lý Dịch Vụ</a></li>
            <li><a href="#">Quản Lý Đặt Lịch</a></li>
            <li><a href="#">Quản Lý Nhân Viên</a></li>
            <li class="active"><a href="index.php?page=khunggio">Quản Lý Khung Giờ</a></li>
        </ul>
    </div>

    <div class="content">

        <nav>
            <i class='bx bx-menu'></i>
            <form>
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <label for="theme-toggle" class="theme-toggle"></label>
        </nav>

        <main>
            <h1>Thêm Khung Giờ</h1>

            <form class="form-box" method="POST" action="index.php?page=khunggio_store">

                <label>Chọn khung giờ:</label>
                <select name="thoigian" required>
                    <?php foreach($timeSlots as $slot): ?>
                        <option value="<?= $slot ?>"><?= $slot ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <label>Ngày:</label>
                <input type="text" value="<?= date('Y-m-d') ?>" disabled>
                <br>
                <button class="btn-submit" type="submit">Thêm mới</button>
            </form>

        </main>

    </div>

</body>

</html>
