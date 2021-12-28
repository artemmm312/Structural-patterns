<?php

namespace HousDataBase;

use HousVariation\HousVariation;
use ConcreteHous\ConcreteHous;

class HousDataBase
{
	private array $housVariations = [];
	private array $concreteHouses = [];

	public function addHous(string $owner, string $company, string $material, string $high,): void
	{
		$housVariation = $this->getHousVariation($material, $high);
		if ($housVariation === null)
		{
			$housVariation = new HousVariation($material, $high);
			$this->housVariations[] = $housVariation;
		}
		// Создаем и пишем в "базу" конкретный дом
		$this->concreteHouses[] = new ConcreteHous($owner, $company, $housVariation);
	}

	// Метод проверяет - есть ли в "базе" вариаций совпадения
	private function getHousVariation(string $material, string $high): ?HousVariation
	{
		for ($i = 0; $i < count($this->housVariations); $i++)
		{
			if ($this->housVariations[$i]->material == $material && $this->housVariations[$i]->high == $high)
			{
				return $this->housVariations[$i];
			}
		}
		return null;
	}

	public function printConcreteHous(): void
	{
		echo "<b>Конкретные дома:</b><br><br>";
		for ($i = 0; $i < count($this->concreteHouses); $i++)
		{
			$this->concreteHouses[$i]->describeConcreteHous();
			echo "<br>";
		}
		echo "<br>";
	}

	public function printHousVariations(): void
	{
		echo "<b>Вариации:</b><br><br>";
		for ($i = 0; $i < count($this->housVariations); $i++)
		{
			$this->housVariations[$i]->describeHousVariant("Нет владельца", "Нет строительной компании");
			echo "<br>";
		}
		echo "<br>";
	}
}
