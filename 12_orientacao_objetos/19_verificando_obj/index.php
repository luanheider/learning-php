<?php 
    class Person {
        public $name = "Luan";
        public function sayHalloTo() {
            echo "$this->name";
        }
    }

    $p1 = new Person();

    //verificando se é obj
    if(is_object($p1)) {
        echo "è obj<br>";
    }
    
    //verificando a classe do obj
    echo get_class($p1);
    echo "<br>";

    //verificando se método existe, passa o obj e por string o método

    if(method_exists($p1, "sayHalloTo")) {
        echo "Método existe na classe";
    } else {
        echo "Método não existe";
    }
?>