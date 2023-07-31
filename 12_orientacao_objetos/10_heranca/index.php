<?php 
    class Human {
        public $age = 33;
        function speak() {
            echo "Hello, World!<br>";
        }
        private function gritar() {
            echo "PHP não está morto!<br>";
        }
        protected function speakLow() {
            echo "lalala <br>";
        }
        public function getSpeakLow() {
            $this->speakLow();
        }
        public function getGritar() {
            $this->gritar();
        }
    }

    $ze = new Human();
    $ze->speak();
    $ze->getGritar();
    $ze->getSpeakLow();

    class Programming extends Human {
        public function getSpeakLowProgramming() {
            $this->speakLow();
        }
        // public function getGritarProgramming() {
        //     $this->gritar();
        // }
    }

    $luan = new Programming();
    echo $luan->age."<br>";
    $luan->speak();
    $luan->getGritar();
    $luan->getSpeakLow();
    //acessando método get do protect
    $luan->getSpeakLowProgramming();

?>