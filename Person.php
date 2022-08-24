<?php
class Person {
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi ($name) {
    return "Hi $name, I`m ".$this->name;
  }
  function setHp($hp) {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp() {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getLastName() {
    return $this->lastname;
  }
  function getAge() {
    return $this->age;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    return "
    <h3> A few words about myself</h3><br>"."My name is ".$this->getName()." My lastname is ".$this->getLastName()." My age is ".$this->getAge()."<br>".
    "My Mother is ".$this->getMother()->getName().$this->mother->getLastName()." She`s ".$this->mother->getAge()." years old <br>".
    "Her dad and my grandfather ".$this->mother->getFather()->getName().$this->mother->getFather()->getLastName(). " He`s ".$this->mother->getFather()->getAge()." years old <br>".
    "Her mother and my grandmother ".$this->mother->getMother()->getName().$this->mother->getMother()->getLastName(). " She`s ".$this->mother->getMother()->getAge()." years old <br>".
    "My Father is ".$this->getFather()->getName().$this->father->getLastName()." He`s ".$this->father->getAge()." years old <br>".
    "He dad and my grandfather ".$this->father->getFather()->getName().$this->father->getFather()->getLastName(). " He`s ".$this->father->getFather()->getAge()." years old <br>".
    "He mother and my grandmother ".$this->father->getMother()->getName().$this->father->getMother()->getLastName(). " She`s ".$this->father->getMother()->getAge()." years old <br>"
    ;
  }
}
//$medKit = 50;
$igor = new Person("Igor", "Petrov", 68);
$nina = new Person("Nina", "Petrova", 65);
$sergio = new Person("Sergio", "Ivanov", 70);
$licia = new Person("Lucia", "Ivanova", 68);
$alex = new Person("Alex", "Ivanov", 42, $sergio, $licia);
$olga = new Person("Olga", "Ivanova", 42, $nina, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();

// echo $valera->getMother()->getFather()->getName();


//здоровье человека не может быть выше 100
// echo $alex->name; 
// echo $alex->sayHi($igor->name);
// $alex->setHp(-30); //упал
// echo $alex->getHp()."<br>";
// $alex->setHp($medKit); //нашел аптечку
// echo $alex->getHp();
