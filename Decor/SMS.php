<?php

namespace Decorator;

class SMS extends BaseDecorator
{
	public function send(): string
	{
		return "Вам SMS сообщение : " . parent::send() . "<br>";
	}
}