<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/qlydanhmuc.css">

    <title>Thêm Dịch Vụ | 31Shine</title>
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
            <li><a href="#">Thống Kê</a></li>
            <li><a href="?act=qlydanhmuc">Quản Lý Danh Mục</a></li>
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

            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">3</span>
            </a>

            <a href="#" class="profile">
                <img src="./anh/logochinh.424Z.png">
            </a>
        </nav>

        <!-- Main Add Form -->
        <main>
            <div class="header">
                <div class="left">
                    <h1>Thêm Dịch Vụ Mới</h1>
                </div>
                <a href="?act=qlydichvu" class="btnthem" style="padding:8px 15px;background:#ccc;">← Quay lại</a>
            </div>

            <div class="bottom-data">
                <div class="orders" style="padding:20px;">

                    <form action="?act=store" method="POST" enctype="multipart/form-data" class="form-add">

                        <div class="form-group">
                            <label>Tên Dịch Vụ</label>
                            <input type="text" name="name" required placeholder="Nhập tên dịch vụ">
                        </div>

                        <div class="form-group">
                            <label>Mô Tả</label>
                            <textarea name="description" rows="4" placeholder="Nhập mô tả..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Giá (VNĐ)</label>
                            <input type="number" name="price" required min="0" placeholder="Nhập giá...">
                        </div>

                        <div class="form-group">
                            <label>Thời gian thực hiện (phút)</label>
                            <input type="number" name="time" required min="1" placeholder="VD: 30">
                        </div>

                        <div class="form-group">
                            <label>Ảnh dịch vụ</label>
                            <input type="file" name="image" accept="image/*">
                        </div>

                        <button type="submit" class="btnthem" style="padding:10px 25px;margin-top:15px;">
                            Thêm Dịch Vụ
                        </button>

                    </form>

                </div>
            </div>
        </main>
    </div>

    <style>
        .form-add {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .form-group input,
        .form-group textarea {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #aaa;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #f5c542;
            box-shadow: 0 0 5px #f5c542;
        }
    </style>

</body>
</html>
