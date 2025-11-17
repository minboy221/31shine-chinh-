<?php
require_once "models/KhungGio.php";

class KhungGioController
{
    public function index()
    {
        $items = KhungGio::all();
        require "./views/khunggio/index.php";
    }

    public function create()
    {
        // Tạo danh sách khung giờ 30 phút
        $timeSlots = $this->generateTimeSlots();
        require "./views/khunggio/create.php";
    }

    public function store()
    {
        $time = $_POST['thoigian']; // chọn từ dropdown
        KhungGio::create($time);
        header("Location: index.php?page=khunggio");
    }

    public function edit()
    {
        $item = KhungGio::find($_GET['id']);
        $timeSlots = $this->generateTimeSlots();
        require "./views/khunggio/edit.php";
    }

    public function update()
    {
        $id = $_POST['id'];
        $time = $_POST['thoigian'];
        KhungGio::updateData($id, $time);
        header("Location: index.php?page=khunggio");
    }

    public function delete()
    {
        KhungGio::deleteData($_GET['id']);
        header("Location: index.php?page=khunggio");
    }

    // Hàm sinh khung giờ 30 phút
    private function generateTimeSlots($start = "08:00", $end = "18:00", $interval = 30)
    {
        $startTime = strtotime($start);
        $endTime = strtotime($end);
        $slots = [];
        for ($time = $startTime; $time < $endTime; $time += $interval * 60) {
            $slotStart = date("H:i", $time);
            $slotEnd = date("H:i", $time + $interval * 60);
            $slots[] = "$slotStart - $slotEnd";
        }
        return $slots;
    }
}
?>
