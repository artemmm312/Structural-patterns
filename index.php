<?php

/* Декоратор — это структурный паттерн проектирования, 
который позволяет динамически добавлять объектам новую функциональность, 
оборачивая их в полезные «обёртки». */

use Notifer\Notifer, Notifer\Message;
use Decorator\Facebook, Decorator\SMS, Decorator\VK;

require __DIR__ . '/vendor/autoload.php';

function clientCode(Notifer $notifer)
{
	echo $notifer->send();
}

$simple = new Message('Привет');

echo clientCode($simple);

$decor1 = new Facebook($simple);
$decor2 = new SMS($decor1);
$decor3 = new VK($decor2);

clientCode($decor1);
clientCode($decor3);


