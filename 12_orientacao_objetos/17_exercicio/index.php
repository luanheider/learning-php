<?php 
    class Dog {
        public $name;
        public $age;
        public $color;

        function __construct($name, $age, $color) {
            $this->name = $name;
            $this->age = $age;
            $this->color = $color;
        }
        public function getInfo() {
            echo "Nome: $this->name, Idade: $this->age. Cor: $this->color <br>";
        }
    }

    $dog1 = new Dog("Belinha", 2, "Gray");
    $dog1->getInfo();
    
    $name = "Tuca";
    $age = 1;
    $color = "White";

    $dog2 = new Dog($name, $age, $color);
    $dog2->getInfo();
?>