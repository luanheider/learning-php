<?php 
    $person = [
        'name' => 'Luan', 
        'age' => '33'
    ];

    function checkAge($array) {
        $maiorIdade = 18;
        if($array['age'] >= $maiorIdade) {
            echo "Maior de idade";
        } else {
            echo "Menor de idade";
        }
    }
    checkAge($person);
?>