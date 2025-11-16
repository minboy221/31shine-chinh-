<link rel="stylesheet" href="<?= BASE_URL ?>/public/editCategory.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
<script src="<?= BASE_URL ?>/public/admin.js"></script>

 <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class="bi bi-scissors"></i>
            <div class="logo-name"><span>31</span>Shine</div>
        </a>
        <ul class="side-menu">
            <li><a href="#">Thống Kê</a></li>
            <li class="active"><a href="index.php?act=qlydanhmuc">Quản Lý Danh Mục</a></li>
            <li><a href="#">Quản Lý Dịch Vụ</a></li>
            <li><a href="#">Quản Lý Đặt Lịch</a></li>
            <li><a href="#">Quản Lý Nhân Viên</a></li>
            <li><a href="#">Quản Lý Khung Giờ</a></li>
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
    <!-- End of Sidebar -->

<div class="card">
    <h2>Sửa danh mục</h2>

    <form action="index.php?act=category-saveEdit" method="post">
        <input type="hidden" name="id" value="<?= $category['id'] ?>">

        <label>Tên danh mục</label>
        <input type="text" name="name" value="<?= $category['name'] ?>" required>

        <label>Mô tả</label>
        <textarea name="description" rows="4"><?= $category['description'] ?></textarea>

        <button type="submit">Cập nhật</button>
    </form>
</div>
