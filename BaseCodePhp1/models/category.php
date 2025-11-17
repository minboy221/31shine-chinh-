<?php
require_once './commons/function.php';

class Category
{
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy tất cả danh mục
    public function getAll()
    {
        $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy danh mục theo ID
    public function getById($id)
    {
        $sql = "SELECT * FROM danhmuc WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Thêm mới danh mục
    public function insert($data)
    {
        $sql = "INSERT INTO danhmuc (name, description) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$data['name'], $data['description']]);
    }

    // Cập nhật danh mục
    public function update($id, $data)
    {
        $sql = "UPDATE danhmuc SET name = ?, description = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$data['name'], $data['description'], $id]);
    }

    // Xóa danh mục
    public function delete($id)
    {
        $sql = "DELETE FROM danhmuc WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
}
