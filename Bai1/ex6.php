<?php

class Character {
    private $name;
    private $hp;
    private $level;
    private $score;

    public function __construct($name, $hp, $level = 1) {
        $this->name = $name;
        $this->hp = $hp;
        $this->level = $level;
        $this->score = 0;
    }

    public function getName() {
        return $this->name;
    }

    public function getHP() {
        return $this->hp;
    }

    public function isAlive() {
        return $this->hp > 0;
    }

    public function takeDamage($damage) {
        $this->hp -= $damage;
        if ($this->hp < 0) {
            $this->hp = 0;
        }
    }

    public function attackNormal(Character $target) {
        $damage = 100 * $this->level;
        $target->takeDamage($damage);
        $this->score += 10 * $this->level;
        echo $this->name . " đánh thường<br> " . $target->getName() . " gây sát thương<br> " . $damage . ".\n";
    }

    public function useSkin(Character $target) {
        $damage = 1000 * $this->level;
        $target->takeDamage($damage);
        $this->score += 50 * $this->level;
        echo $this->name . " sử dụng skill lên " . $target->getName() . " gây sát thương " . $damage . ".\n";
    }

    public function getScore() {
        return $this->score;
    }
}

class Bot extends Character {
    public function attackNormal(Character $target) {
        $damage = 1000;
        $target->takeDamage($damage);
        echo $this->getName() . " (Bot) đánh thường " . $target->getName() . " gây sát thương " . $damage . ".\n";
    }

    public function useSkin(Character $target) {
        $damage = 10000;
        $target->takeDamage($damage);
        echo $this->getName() . " (Bot) sử dụng skill lên " . $target->getName() . " gây sát thương " . $damage . ".\n";
    }
}

// Tạo các nhân vật và quái
$hero = new Character("Người hùng", 5000, 3);
$monster = new Character("Quái vật", 3000);
$bot = new Bot("Bot AI", 10000);

// Chạy mô phỏng trận đấu
$hero->attackNormal($monster);
$hero->useSkin($monster);
$bot->attackNormal($hero);
$bot->useSkin($hero);

// Kết quả trận đấu
echo $hero->getName() . " còn " . $hero->getHP() . " HP.\n";
echo $monster->getName() . " còn " . $monster->getHP() . " HP.\n";
echo $bot->getName() . " còn " . $bot->getHP() . " HP.\n";
echo $hero->getName() . " có tổng điểm: " . $hero->getScore() . "\n";
?>
