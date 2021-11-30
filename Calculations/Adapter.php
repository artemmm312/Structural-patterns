<?php

namespace Calculations;

use CoolService\CoolService;

class Adapter implements Calculations
{
	public $coolService;

	public function __construct(CoolService $coolService)
	{
		$this->coolService = $coolService;
	}

	public function operation(): void
	{
		$this->coolService->sum();
		$this->coolService->sub();
		$this->coolService->mult();
	}
}