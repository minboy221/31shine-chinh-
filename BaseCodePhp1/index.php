<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once file common
require_once('./commons/env.php');
require_once('./commons/function.php');
require_once("./controllers/CattocContronler.php");
require_once("./controllers/DichVuController.php");
require_once("./models/DichVuModel.php");

//route

$act = $_GET['act'] ?? 'home';

match ($act) {
    // phần hiển thị giao diện trang clien
    'home' => homeClient(),
    'about' => aboutClien(),
    'dichvu' => DichvuClien(),
    'nhanvien' => NhanvienClien(),
    //phần hiển thị giao diện admin
    'homeadmin' => homeAdmin(),
    'qlydanhmuc' => qlyDanhmuc(),
    'qlydichvu' => qlidichvu1(),
    'create_dichvu' => (new DichVuController())->create(),
    'store' => (new DichVuController())->store(),
    'edit_dichvu' => (new DichVuController())->edit(),
    'update_dichvu' => (new DichVuController())->update(),
    'delete_dichvu' => (new DichVuController())->delete(),
    'detail_dichvu' => (new DichVuController())->detail(),

    default => notFound(),
}
    ?>