<?php
declare(strict_types=1);

session_start();

$name=$_POST['name'];
$surname=$_POST['surname'];
$age=$_POST['age'];


$_SESSION['name']=$name;
$_SESSION['surname']=$surname;
$_SESSION['age']=$age;

echo "Name received: " . htmlspecialchars($name) . "<br>";
echo "Surname received: " . htmlspecialchars($surname) . "<br>";
echo "Age received: " . htmlspecialchars($age) . "<br>";
