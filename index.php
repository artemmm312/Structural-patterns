<?php

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

//конкретная машина
class ConcreteHous
{
	public $owner;
	public $company;
	private $housVariation;

	public function __construct($owner, $company, HousVariation $housVariation)
	{
		$this->owner = $owner;
		$this->company = $company;
		$this->housVariation = $housVariation;
	}

	public function describeConcreteHous(): void
	{
		$this->housVariation->describeHousVariant($this->owner, $this->company);
	}
}

//База данных домов
class HousDataBase
{
	private $housVariations = [];
	private $concreteHouses = [];

	public function addHous($owner, $company, $material, $high,)
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
	private function getHousVariation($material, $high): ?HousVariation
	{
		for ($i = 0; $i < sizeof($this->housVariations); $i++)
		{
			if ($this->housVariations[$i]->material == $material && $this->housVariations[$i]->high == $high)
			{
				return $this->housVariations[$i];
			}
		}
		return null;
	}

	public function printConcreteHous()
	{
		echo "<b>Конкретные дома:</b><br><br>";
		for ($i = 0; $i < count($this->concreteHouses); $i++)
		{
			$this->concreteHouses[$i]->describeConcreteHous();
			echo "<br>";
		}
		echo "<br>";
	}

	public function printHousVariations()
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


$carDataBase = new HousDataBase();
$carDataBase->addHous("Вася", "Компания1", "Кирпич", "2 этажа");
$carDataBase->addHous("Петя", "Компания2", "Кирпич", "2 этажа");
$carDataBase->addHous("Артём", "Компания3", "Кирпич", "2 этажа");
$carDataBase->addHous("Колья", "Компания4", "Дерево", "1 этаж");

$carDataBase->printConcreteHous();
$carDataBase->printHousVariations();
