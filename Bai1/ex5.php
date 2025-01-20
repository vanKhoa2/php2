<?php

interface People{
    public function run();
    public function sound();
}
class Student implements People {
    public function run()
    {
        echo "Sinh vien dang chay den lop <br>";
    }
    public function sound(){
        echo "Sinh vien dang noi<br>";
    }
}
$sinhvienA = new Student;
$sinhvienA ->run();
$sinhvienA ->sound();


// thực hiện bài toán sau hãy tạo 1 lớp bao gồm các phương thức đánh thường , skin .
// Trong đó thể hiện 1 lớp quái  có thuộc tính là (tên , HP )
// phương thức đánh thường giảm ng bị đánh giảm 100HP , skin giảm 500
// Đối với nhân vật đánh thường tùy từng cấp độ , khi đánh cần ghi nhận tăng điểm cho nhân vật ,
// Skin của nv sẽ là 1k và cũng đc nhân theo cấp độ của  nhân vật ,
// Bot đánh thường 1k  Skin 10k 