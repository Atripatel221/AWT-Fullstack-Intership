<?php

class student{
public $name;
 public  $number;
public function __construct($name,$number){
    $this -> name = $name;
    $this -> number = $number;
   }
 public  function message(){
    return "student is ".$this -> name . " "."<br>"."enrollnumber is ".$this -> number."";

   }
}
  $s1 = new student("Atri","221");
  echo $s1 -> message();

?>