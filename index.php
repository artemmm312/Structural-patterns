<?php

/* Заместитель — это структурный паттерн проектирования, 
который позволяет подставлять вместо реальных объектов специальные объекты-заменители. 
Эти объекты перехватывают вызовы к оригинальному объекту, 
позволяя сделать что-то до или после передачи вызова оригиналу. */

use Service\iService, Service\Service;
use Proxy\Proxy;

require __DIR__ . '/vendor/autoload.php';

function clientCode(iService $service)
{
	echo $service->operation("Hello");


	echo $service->operation("Hello");
}

echo "Выполняется реальный сервис: <br>";
$service = new Service();
clientCode($service);

echo "Выполняется заместитель: <br>";
$proxy = new Proxy($service);
clientCode($proxy);


