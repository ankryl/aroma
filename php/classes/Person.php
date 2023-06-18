<?php

class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }

  function sayHi($name)
  {
    return "Hi $name, I`m " . $this->name;
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
  function getLastname() {
    return $this->lastname;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    return "<h3>Пара слов обо мне: </h3><br>" . "Мое имя: " . $this->getName() . "<br> Моя фамилия: " . $this->getLastname() .  
     " Моего папу зовут: " . $this->getFather()->getName() . " " .  $this->getFather()->getLastname() . " Мою маму зовут: " . $this->getMother()->getName() . " " .  $this->getMother()->getLastname() .
     "<br>Моего дедушку по линии папы зовут: " . $this->getFather()->getFather()->getName() . " " . $this->getFather()->getFather()->getLastname() . 
     " Мою бабушку по линии папы зовут: " . $this->getFather()->getMother()->getName() . " " . $this->getFather()->getMother()->getLastname() . 
     "<br>Моего дедушку по линии мамы зовут: " . $this->getMother()->getFather()->getName() . " " . $this->getMother()->getFather()->getLastname() . 
     " Мою бабушку по линии мамы зовут: " . $this->getMother()->getMother()->getName() . " " . $this->getMother()->getMother()->getLastname();
     //Вывести данные обо всей родне, включая бабушек и дедушек
  }
}

$larisa = new Person("Larisa", "Ivanova", 68);
$alex = new Person("Alex", "Ivanov", 72);
$vladimir = new Person("Vladimir", "Petrov", 77);
$natalya = new Person("Natalya", "Petrova", 78);
$igor = new Person("Igor", "Petrov", 40, $natalya, $vladimir);
$olga = new Person("Olga", "Petrova", 38, $larisa, $alex);
$valera = new Person("Valera", "Petrov", 10, $olga, $igor);

echo $valera->getInfo();

//echo $valera->getMother()->getFather()->getName();

//Здоровье человека не может быть больше 100
// $medKit = 50;
// $alex->setHp(-30);//Упал
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit);//Нашел аптечку
// echo $alex->getHp();
