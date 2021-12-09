<?php

namespace Proxy;

use Service\iService, Service\Service;

class Proxy implements iService
{
	private Service $service;
	private array $cache = [];

	public function __construct(Service $service)
	{
		$this->service = $service;
	}

	public function operation($value): string
	{
		if (!isset($this->cache[$value])) {
			echo "Этих данных нет в кэше, но сейчас они там появятся. \n";
			$result = $this->service->operation($value);
			$this->cache[$value] = $result;
		} else {
			echo "Эти данные уже были и закэшированны. \n";
		}
		return $this->cache[$value];
	}
}