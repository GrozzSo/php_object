<?php

class Animal {
    protected $weight; 
    protected $age; 
    protected $color; 

    public function __construct($weight, $age, $color) {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }

    public function getInfo() {
        return "Вес: {$this->weight} кг, Возраст: {$this->age} лет, Окрас: {$this->color}";
    }
}

class Lion extends Animal {
    private $prideSize; 

    public function __construct($weight, $age, $color, $prideSize) {
        parent::__construct($weight, $age, $color);
        $this->prideSize = $prideSize;
    }

    public function roar() {
        return "Когти взрослого льва могут достигать семи сантиметров в длину.";
    }

    public function getInfo() {
        return parent::getInfo() . ", Длина хвоста: {$this->prideSize}";
    }
}

class Rabbit extends Animal {
    private $earLength; 

    public function __construct($weight, $age, $color, $earLength) {
        parent::__construct($weight, $age, $color);
        $this->earLength = $earLength;
    }

    public function hop() {
        return "Самые длинные уши у кроликов равны почти 80 см ";
    }

    public function getInfo() {
        return parent::getInfo() . ", Длина ушей: {$this->earLength} см";
    }
}

class Wolf extends Animal {
    private $howl; 

    public function __construct($weight, $age, $color, $howl) {
        parent::__construct($weight, $age, $color);
        $this->howl = $howl;
    }

    public function howl() {
        return "За волчьей стаей часто следует стая воронов ";
    }

    public function getInfo() {
        return parent::getInfo() . ", У волка {$this->howl} зуба";
    }

    
}

$lion = new Lion(230, 10, 'желтый', 105);
$rabbit = new Rabbit(2, 5, 'серый', 30);
$wolf = new Wolf(70, 8, 'серый', 42);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о животных</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card">
        <h2 class="leo">Лев 🦁</h2>
        <p class="info"><?php echo $lion->getInfo(); ?></p>
        <p><?php echo $lion->roar(); ?></p>
    </div>

    <div class="card">
        <h2 class="rabbit">Кролик 🐰</h2>
        <p class="info"><?php echo $rabbit->getInfo(); ?></p>
        <p><?php echo $rabbit->hop(); ?></p>
    </div>

    <div class="card">
        <h2 class="wolf">Волк 🐺</h2>
        <p class="info"><?php echo $wolf->getInfo(); ?></p>
        <p><?php echo $wolf->howl(); ?></p>
    </div>

</body>
</html>
