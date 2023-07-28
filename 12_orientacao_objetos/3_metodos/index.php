<?php

    class Person {
        function speak() {
            echo "Olá, tudo bem? <br>";
        }
    }

    $luan = new Person();
    $joao = new Person();
    
    $luan->speak();
    $joao->speak();
?>