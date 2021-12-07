<?php

namespace Decorator;

class SMS extends BaseDecorator
{
	public function send()
	{
		return "Вам SMS сообщение : " . parent::send() . "<br>";
	}
}