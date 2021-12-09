<?php

namespace Service;

class Service implements iService
{
	public function operation(string $value): string
	{
		$result = "Выполняется операция с $value <br>";
		return $result;
	}
}