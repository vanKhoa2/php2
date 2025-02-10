<?php
namespace App\Models;
Use PDO;

class BaseModel
{
    protected $conn = null;
    protected $tablename = null;
    protected $primaryKey = 'id';
    protected $sqlBuilder = null;

    public function __construct()
    {
        try {
            $this->conn = new \PDO("mysql:host=localhost;dbname=php2_wd19306;charset=utf8; port=3306", "root", "");
        }catch (\PDOException $e) {
            echo("Kết nối thất bại: " . $e->getMessage());
        }
    }

    public static function all() {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM " . $model->tablename;
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * create: thêm mới dữ liệu từ 1 bảng
     * $data: dữ liệu mảng có key và value trong key là tên cột còn value là giá trị tương ứng
     */
    public static function create($data) {
        $model = new static;
        $sql = "INSERT INTO   $model->tablename  (";
        $value = "VALUES(";
        foreach ($data as $column => $val) {
            $sql .= "`$column` ,";
            $value .= ":$value,";
        }

        $sql = rtrim($sql, ',') . ")" . rtrim($value, ',') . ")";
        
        $stmt = $model->conn->prepare($sql);
        $stmt->execute($data);

    }
}