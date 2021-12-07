<?php

namespace Items;

class Box implements Items
{
	protected array $items = [];

	public function add(Items $item): void
	{
		$name = $item->getName();
		$this->items[$name] = $item;
	}

	public function getName(): void
	{
		foreach ($this->items as $name) echo $name->getName() . "<br>";
	}
}
