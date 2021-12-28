<?php

namespace HousVariation;

class HousVariation
{
	public string $material;
	public string $high;

	public function __construct(string $material, string $high)
	{
		$this->material = $material;
		$this->high = $high;
	}

	public function describeHousVariant(string $owner, string $company): void
	{
		echo "Владелец: " . $owner . "<br>";
		echo "Строительная компания: " . $company . "<br>";
		echo "Материал: " . $this->material . "<br>";
		echo "Колличество этажей: " . $this->high . "<br>";
	}
}