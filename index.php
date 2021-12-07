<?php

/* Мост — это структурный паттерн проектирования, 
который разделяет один или несколько классов на две отдельные иерархии — абстракцию и реализацию, 
позволяя изменять их независимо друг от друга. */

use Hous\Hous, Hous\BrickHouse, Hous\WoodenHouse;
use BuildCompany\BuildCompany, BuildCompany\Company1, BuildCompany\Company2;

require __DIR__ . '/vendor/autoload.php';

function clientCode(Hous $hous)
{
	$hous->build();
}

$build_company1 = new Company1();
$build_company2 = new Company2();

$hous1 = new WoodenHouse($build_company1);
clientCode($hous1);

$hous1->changeComany($build_company2);
clientCode($hous1);

$hous2 = new BrickHouse($build_company2);
clientCode($hous2);

