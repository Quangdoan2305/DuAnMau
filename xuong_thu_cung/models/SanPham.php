<?php
class SanPham{
    public $conn;//Khai báo phương thức
    public function __construct()
    {
        $this->conn = connectDB();
    }
    //Viet ham lay toan bo danh sach san pham
    public function getAllProduct(){
        try {
            $sql = 'SELECT * FROM san_phams';
            $stmt = $this ->conn->prepare($sql);
            $stmt->execute();
            
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi" .$e->getMessage();
        }
    }
}