<?php 
    //classes anônimas são criadas em variáveis e não possuem nomes
    $anonima = new class(){
        public $name = "Luan";
        
        public function sayName() {
            echo "$this->name";
        }
    };

    $anonima->sayName();

?>