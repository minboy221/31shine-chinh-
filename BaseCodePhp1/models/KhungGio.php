<?php
class KhungGio
{
    // Lấy tất cả khung giờ
    public static function all()
    {
        global $conn;
        $sql = "SELECT khunggio.*, ngay.date 
                FROM khunggio 
                JOIN ngay ON khunggio.ngay_id = ngay.id
                ORDER BY `time` ASC";
        return $conn->query($sql);
    }

    // Tìm một khung giờ theo id
    public static function find($id)
    {
        global $conn;
        $stmt = $conn->prepare("
            SELECT khunggio.*, ngay.date 
            FROM khunggio 
            JOIN ngay ON khunggio.ngay_id = ngay.id 
            WHERE khunggio.id = ?
        ");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Tạo mới khung giờ với ngày hiện tại
    public static function create($time)
    {
        global $conn;

        $today = date('Y-m-d');

        // Lấy tho_id hợp lệ từ bảng tho
        $result_tho = $conn->query("SELECT id FROM tho ORDER BY id ASC LIMIT 1");
        if ($result_tho->num_rows == 0) {
            die("Lỗi: Bảng tho chưa có dữ liệu!");
        }
        $tho_id = $result_tho->fetch_assoc()['id'];

        // Kiểm tra ngày hôm nay trong bảng ngay
        $result_ngay = $conn->query("SELECT id FROM ngay WHERE date = '$today' LIMIT 1");
        if ($result_ngay->num_rows > 0) {
            $ngay_id = $result_ngay->fetch_assoc()['id'];
        } else {
            $conn->query("INSERT INTO ngay (tho_id, date) VALUES ($tho_id, '$today')");
            $ngay_id = $conn->insert_id;
        }

        // Thêm khung giờ
        $stmt = $conn->prepare("INSERT INTO khunggio (`time`, ngay_id) VALUES (?, ?)");
        $stmt->bind_param("si", $time, $ngay_id);
        return $stmt->execute();
    }

    // Cập nhật khung giờ (giữ nguyên ngày)
    public static function updateData($id, $time)
    {
        global $conn;
        $stmt = $conn->prepare("UPDATE khunggio SET `time` = ? WHERE id = ?");
        $stmt->bind_param("si", $time, $id);
        return $stmt->execute();
    }

    // Xóa khung giờ
    public static function deleteData($id)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM khunggio WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
