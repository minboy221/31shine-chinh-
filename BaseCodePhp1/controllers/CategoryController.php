<?php
require_once './models/category.php';

class CategoryController
{
    private $model;

    public function __construct()
    {
        $this->model = new Category();
    }

    // Danh sách danh mục
    public function list()
    {
        $categories = $this->model->getAll();
        require_once './views/admin/Category/qlydanhmuc.php';
    }

    // Form thêm
    public function addForm()
    {
        require_once './views/admin/Category/add.php';
    }

    // Lưu thêm mới
    public function saveAdd()
    {
        $data = [
            'name' => $_POST['name'],
            'description' => $_POST['description']
        ];

        $this->model->insert($data);
        header('Location: index.php?act=qlydanhmuc');
        exit;
    }

    // Form sửa
    public function editForm()
    {
        $id = $_GET['id'];
        $category = $this->model->getById($id);

        require_once './views/admin/Category/edit.php';
    }

    // Lưu sửa
    public function saveEdit()
    {
        $id = $_POST['id'];
        $data = [
            'name' => $_POST['name'],
            'description' => $_POST['description']
        ];

        $this->model->update($id, $data);
        header('Location: index.php?act=qlydanhmuc');
        exit;
    }

    // Xóa danh mục
    public function delete()
    {
        $id = $_GET['id'];
        $this->model->delete($id);
        header('Location: index.php?act=qlydanhmuc');
        exit;
    }
}
