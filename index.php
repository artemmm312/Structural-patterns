<?php

/* Легковес — это структурный паттерн проектирования, 
который позволяет вместить бóльшее количество объектов в отведённую оперативную память. 
Легковес экономит память, разделяя общее состояние объектов между собой, 
вместо хранения одинаковых данных в каждом объекте. */

use HousDataBase\HousDataBase;

require __DIR__ . '/vendor/autoload.php';

$carDataBase = new HousDataBase();
$carDataBase->addHous("Вася", "Компания1", "Кирпич", "2 этажа");
$carDataBase->addHous("Петя", "Компания2", "Кирпич", "2 этажа");
$carDataBase->addHous("Артём", "Компания3", "Кирпич", "2 этажа");
$carDataBase->addHous("Колья", "Компания4", "Дерево", "1 этаж");

$carDataBase->printConcreteHous();
$carDataBase->printHousVariations();