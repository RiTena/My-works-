<?php
require_once 'Class/Admin.php';
$admin = new Admin("админов", "admin@example.com", 800);

$admin->vivodInfo(); 
echo "<br>";

$admin->cUser("Айн Карменович", "lcorp@gmail.com", 250);
$admin->cUser("Родя", "limb@mail.ru", 4);
$admin->cUser("Роланд", "ruina@ruina.of", 1);


$admin->UserVise();


$userData1 = $admin->getUinfo(0);
echo "данные пользователя с айди 0 <br>";
print_r($userData1);


echo "<br>";
$userData2 = $admin->getUinfo(1);
echo "данные пользователя с айди 1 <br>";
print_r($userData2);
echo "<br>";


$admin->setName("расим");
echo "имя админа " . $admin->getName() . "<br>";

$admin->setAge(40);
echo "Админ Стареет наоборот " . $admin->getAge() . "<br>";
?>