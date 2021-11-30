<?php

namespace Calculations;

class MyService implements Calculations
{
	private $a;
	private $b;

	public function __construct(int $a, int $b)
	{
		$this->a = $a;
		$this->b = $b;
	}
	public function operation(): void
	{
		echo "Сумма равна $this->a + $this->b <br>";
	}
}