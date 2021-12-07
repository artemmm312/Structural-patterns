<?php

namespace Decorator;

class Facebook extends BaseDecorator
{
	public function send()
	{
		return "Вам сообщение в Facebook : " . parent::send() . "<br>";
	}
}