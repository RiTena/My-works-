<?php
//подключен клас машины
require_once 'class/Car.php';
$mycar = new car(1999, "red", 1.6);
echo "первый подключенный класс<br>";
print_r($mycar);

echo "<br>";
//подключён класс Искажение(Distort на англ)
require_once 'class/Distort.php';
$myshihka = new Distort (60, 5);
echo "<br>";

//подключен класс работников
require_once 'class/Emloyee.php';
$employee1 = new Employee("Айн", 1, 17);
$employee2 = new Employee("Кармен", 2, 177);

echo "Информация о негетах<br>";
$employee1->vivodInfo();
$employee2->vivodInfo();


$employee1->setName("Нагетс");
$employee1->setZp(600);    
$employee1->setAge(42); 

echo "Новое имя " . $employee1->getName() . "<br>";
echo "Новая зп " . $employee1->povZp() . "<br>";
echo "Новый возраст " . $employee1->getAge() . "<br>";


?>