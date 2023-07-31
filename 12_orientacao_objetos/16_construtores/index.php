<?php 
    // pode iniciar objetos com valores pré definidos

    class Car {
        public $color;
        public $portas;
        public $brand;

        function __construct($color, $portas, $brand) {
            $this->color = $color;
            $this->portas = $portas;
            $this->brand = $brand;
        }

    }

    $uno = new Car("Gray", 4, "Fiat");
    echo $uno->color."<br>";
    echo $uno->portas."<br>";
    echo $uno->brand;

?>