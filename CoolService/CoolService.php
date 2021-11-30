<?php

namespace CoolService;

class CoolService
{
	private $a;
	private $b;

	public function __construct(int $a, int $b)
	{
		$this->a = $a;
		$this->b = $b;
	}

	public function sum(): void
	{
		echo "Сумма чисел равна" . $this->a + $this->b . "<br>";
	}

	public function sub(): void
	{
		echo "Разность чисел равна" . $this->a - $this->b . "<br>";
	}

	public function mult(): void
	{
		echo "Произведение чисел равно" . $this->a * $this->b . "<br>";
	}
}