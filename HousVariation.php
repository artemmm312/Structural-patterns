<?php

namespace HousVariation;

class HousVariation
{
	// Повторяющимися элементы
	public $material;
	public $high;

	public function __construct($material, $high)
	{
		$this->material = $material;
		$this->high = $high;
	}

	public function describeHousVariant($owner, $company): void
	{
		echo "Владелец: " . $owner . "<br>";
		echo "Строительная компания: " . $company . "<br>";
		echo "Материал: " . $this->material . "<br>";
		echo "Колличество этажей: " . $this->high . "<br>";
	}
}