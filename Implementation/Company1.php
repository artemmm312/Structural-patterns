<?php

namespace BuildCompany;

class Company1 implements BuildCompany
{
	public function BuildHous(string $material): void
	{
		echo "Строим небольшие дома из материала: $material <br>";
	}
}
