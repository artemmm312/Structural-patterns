<?php

namespace ConcreteHous;

use HousVariation\HousVariation;

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