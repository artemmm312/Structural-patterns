<?php

namespace ConcreteHous;

use HousVariation\HousVariation;

//конкретная машина
class ConcreteHous
{
	public string $owner;
	public string $company;
	private HousVariation $housVariation;

	public function __construct(string $owner, string $company, HousVariation $housVariation)
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