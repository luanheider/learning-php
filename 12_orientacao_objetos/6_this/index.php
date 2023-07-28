<?php 
   class Animal {
    public $name;

    function bark() {
        return "au au <br>";
    }
    function strongBark() {
        return strtoupper($this->bark());
    }

   }

   $belinha = new Animal();
   $belinha->name = "Belinha";
   echo $belinha->name."<br>";
   echo $belinha->strongBark();

?>