<?php

/* Компоновщик — это структурный паттерн проектирования, 
который позволяет сгруппировать множество объектов в древовидную структуру, 
а затем работать с ней так, как будто это единичный объект. */

use Items\Items, Items\Book, Items\Box;

require __DIR__ . '/vendor/autoload.php';

$box = new Box();
$book1 = new Book('Harry Potter');
$book2 = new Book ('It');

$box->add($book1);
$box->add($book2);

function clientCode(Items $item)
{
$item->getName();
}

clientCode($box);