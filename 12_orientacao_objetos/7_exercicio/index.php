<?php 
    class Car {
        public $brand;
        public $releaseYear;
        private $maxVelocity;

        function setMaxVelocity($vMax) {
            return $this->maxVelocity = $vMax;
        }
        function getMaxVelocity() {
            echo "Velocidade máxima do $this->brand: $this->maxVelocity km/hr <br>";
        }   
    }

    $fiat = new Car();
    $fiat->brand = "Fiat";
    $fiat->setMaxVelocity(110);
    $fiat->getMaxVelocity();    

?>