<?php

/* Фасад — это структурный паттерн проектирования, 
который предоставляет простой интерфейс к сложной системе классов, 
библиотеке или фреймворку. */

use Facade\Facade;

use Systems\System1, Systems\System2;

require __DIR__ . '/vendor/autoload.php';

function clientCode(Facade $facade)
{
	echo $facade->operation();
}

/* $system1 = new System1();
$system2 = new System2();
$facade = new Facade($system1, $system2);
clientCode($facade); */

$facade2 = new Facade();
clientCode($facade2);

