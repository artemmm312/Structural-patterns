<?php

namespace BuildCompany;

class Company2 implements BuildCompany
{
	public function BuildHous(string $material): void
	{
		echo "Строим большие дома из материала: $material <br>";
	}
}