<?php

use CoolService\CoolService;
use Calculations\Calculations, Calculations\Adapter;

require __DIR__ . '/vendor/autoload.php';

$coolService = new CoolService(15, 5);
$calculations = new Adapter($coolService);

function clientCode(Calculations $calculations)
{
	$calculations->operation();
}

clientCode($calculations);
