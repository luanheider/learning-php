<?php 
    class People {
        public $name;
        public $age;

        function speak() {
            echo "Oi!<br>";
        }
    }

    $person1 = new People();
    $person1->name = "Luan";
    $person1->age = 33;
    echo $person1->age."<br>";
    echo $person1->name."<br>";

    $person1->speak();

?>