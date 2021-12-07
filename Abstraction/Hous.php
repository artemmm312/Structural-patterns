<?php

namespace Hous;
use BuildCompany\BuildCompany;

abstract class Hous
{
	protected BuildCompany $build_company;

	public function __construct(BuildCompany $build_company)
	{
		$this->build_company = $build_company;
	}

	public function changeComany(BuildCompany $build_company): void
	{
		$this->build_company = $build_company;
	}

	abstract public function build(): void;
}