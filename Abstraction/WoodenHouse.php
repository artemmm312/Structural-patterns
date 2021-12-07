<?php

namespace Hous;
use BuildCompany\BuildCompany;

class WoodenHouse extends Hous
{
	public string $material = 'Дерево';

	public function __construct(BuildCompany $build_company)
	{
		parent::__construct($build_company);
	}

	public function build(): void
	{
		$this->build_company->BuildHous($this->material);
	}
}
