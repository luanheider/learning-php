<?php 
// propriedades private só altero pelo obj instanciado pela classe através de métodos,
// propriedades protect altero pela class principal e pela classe que herda
// propriedades public eu altero pela classe criada e por qualquer outra

    class Car {
        protected $rodas = 2;
        private $vidro = "G20";

        public function setVidro($vidro) {
            return $this->vidro = $vidro;
        }

        public function getVidro() {
            return $this->vidro;
        }


        public function setRoda($qtd) {
            return $this->rodas = $qtd;
        }
        public function getQtdRodas() {
            return $this->rodas;
        }

    }

    $vidro = new Car();
    $vidro->setVidro("G10");
    echo $vidro->getVidro();
    echo "<br>";

    $carro = new Car();
    //echo $carro->rodas;
    echo $carro->getQtdRodas();
    echo "<br>";
    $carro->setRoda(10);
    echo $carro->getQtdRodas();
    echo "<br>";

    class Mecanico extends Car {
        public function alterarRoda($carro) {
            $carro->rodas = 50;
        }
    }

    $luan = new Mecanico();
    $luan->alterarRoda($carro);
    
    echo $carro->getQtdRodas();