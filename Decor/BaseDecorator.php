<?php

namespace Decorator;

use Notifer\Notifer;

class BaseDecorator implements Notifer
{
	protected Notifer $notifer;

	public function __construct(Notifer $notifer)
	{
		$this->notifer = $notifer;
	}

	public function send()
	{
		return $this->notifer->send();
	}
}