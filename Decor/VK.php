<?php

namespace Decorator;

class VK extends BaseDecorator
{
	public function send(): string
	{
		return "Вам сообщение в VK : " . parent::send() . "<br>";
	}
}