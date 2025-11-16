<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once file common
require_once('./commons/env.php');
require_once('./commons/function.php');
require_once("./controllers/CattocContronler.php");
require_once("./controllers/CategoryController.php");

// route
$act = $_GET['act'] ?? 'home';

match ($act) {
    // phần hiển thị giao diện trang client
    'home' => homeClient(),
    'about' => aboutClien(),
    'dichvu' => DichvuClien(),
    'nhanvien' => NhanvienClien(),

    // phần hiển thị giao diện admin
    'homeadmin' => homeAdmin(),

    // ❌ XOÁ hoặc SỬA route lỗi này
    // 'qlydanhmuc' => qlyDanhmuc(),

    // category dùng Controller mới
    'qlydanhmuc' => (new CategoryController())->list(),   // ⭐ THAY THẾ DÒNG CŨ
    // 'category-list' => (new CategoryController())->list(),
    'category-addForm' => (new CategoryController())->addForm(),
    'category-saveAdd' => (new CategoryController())->saveAdd(),
    'category-editForm' => (new CategoryController())->editForm(),
    'category-saveEdit' => (new CategoryController())->saveEdit(),
    'category-delete' => (new CategoryController())->delete(),

    default => notFound(),
};
