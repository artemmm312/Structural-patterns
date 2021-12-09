<?php

namespace Facade;

use Systems\System1, Systems\System2;

class Facade
{
	protected $system1;
	protected $system2;

	public function __construct(
		System1 $system1 = null,
		System2 $system2 = null
	) {
		$this->system1 = $system1 ?: new System1();
		$this->system2 = $system2 ?: new System2();
	}

	public function operation(): string
	{
		$result = "Фасад запускает системы:<br>";
		$result .= $this->system1->operation1();
		$result .= $this->system2->operation1();
		$result .= "Фасад делает еще запросы к системам:<br>";
		$result .= $this->system1->operationN();
		$result .= $this->system2->operationN();

		return $result;
	}
}