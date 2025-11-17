<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once file common
require_once('./commons/env.php');
require_once('./commons/function.php');
require_once("./controllers/CattocContronler.php");
require_once("./controllers/KhungGioController.php"); // Thêm controller Khung Giờ

$khunggioController = new KhungGioController();

// Lấy act hoặc page
$act = $_GET['act'] ?? $_GET['page'] ?? 'home';

match ($act) {
    // phần hiển thị giao diện trang client
    'home' => homeClient(),
    'about' => aboutClien(),
    'dichvu' => DichvuClien(),
    'nhanvien' => NhanvienClien(),

    // phần hiển thị giao diện admin
    'homeadmin' => homeAdmin(),
    'qlydanhmuc' => qlyDanhmuc(),

    // router Khung Giờ admin
    'khunggio' => $khunggioController->index(),
    'khunggio_create' => $khunggioController->create(),
    'khunggio_store' => $khunggioController->store(),
    'khunggio_edit' => $khunggioController->edit(),
    'khunggio_update' => $khunggioController->update(),
    'khunggio_delete' => $khunggioController->delete(),

    default => notFound(),
};
