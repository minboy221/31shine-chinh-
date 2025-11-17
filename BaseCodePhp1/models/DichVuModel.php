<?php

class DichVuModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }

    // Lấy tất cả dịch vụ
    public function all() {
        return $this->conn->query("SELECT * FROM dichvu ORDER BY id DESC");
    }

    // Thêm dịch vụ
    public function insert($data, $file) {
        $name = $data['name'];
        $desc = $data['description'];
        $price = $data['price'];
        $time = $data['time'];

        // upload ảnh
        $imageName = null;
        if (!empty($file['image']['name'])) {
            $imageName = time() . "_" . $file['image']['name'];
            move_uploaded_file($file['image']['tmp_name'], "uploads/" . $imageName);
        }

        $sql = "INSERT INTO dichvu (name, description, price, time, image)
                VALUES ('$name', '$desc', '$price', '$time', '$imageName')";
        $this->conn->query($sql);
    }

    // Lấy 1 dịch vụ theo id
    public function find($id) {
        return $this->conn->query("SELECT * FROM dichvu WHERE id = $id")->fetch_assoc();
    }

    // Update dịch vụ
    public function update($id, $data, $file) {
        $name = $data['name'];
        $desc = $data['description'];
        $price = $data['price'];
        $time = $data['time'];

        $imageSQL = "";
        if (!empty($file['image']['name'])) {
            $imageName = time() . "_" . $file['image']['name'];
            move_uploaded_file($file['image']['tmp_name'], "uploads/" . $imageName);
            $imageSQL = ", image = '$imageName'";
        }

        $sql = "UPDATE dichvu SET 
                name='$name',
                description='$desc',
                price='$price',
                time='$time'
                $imageSQL
                WHERE id=$id";

        $this->conn->query($sql);
    }

    // Xoá dịch vụ
    public function delete($id) {
        $this->conn->query("DELETE FROM dichvu WHERE id = $id");
    }
}
