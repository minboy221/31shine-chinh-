<?php

require_once 'models/DichVuModel.php';

class DichVuController
{

    // ====== DANH SÁCH DỊCH VỤ ======
    public function qlidichvu()
    {
        $model = new DichVuModel();
        $dichvu = $model->all();
        include "views/admin/dichvu/list.php";
    }

    // ====== FORM THÊM ======
    public function create()
    {
        include 'views/admin/dichvu/create.php';
    }

    // ====== LƯU DỊCH VỤ MỚI ======
    public function store()
    {
        $model = new DichVuModel();
        $model->insert($_POST, $_FILES);
        header("Location: index.php?act=qlydichvu"); // đúng route
        exit();
    }


    // ====== FORM SỬA ======
    public function edit()
    {
        $id = $_GET['id'];
        $model = new DichVuModel();
        $dichvu = $model->find($id);
        include 'views/admin/dichvu/edit.php';
    }

    // ====== CẬP NHẬT ======
    public function update()
    {
        $id = $_POST['id'] ?? null; // lấy từ POST
        if (!$id) {
            echo "ID dịch vụ không hợp lệ!";
            exit;
        }

        $model = new DichVuModel();
        $model->update($id, $_POST, $_FILES);
        header("Location: index.php?act=qlydichvu");
        exit();
    }



    // ====== XOÁ ======
    public function delete()
    {
        $id = $_GET['id'];
        $model = new DichVuModel();
        $model->delete($id);
        header("Location: index.php?act=qlydichvu");
    }
}
