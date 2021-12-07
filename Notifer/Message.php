<?php

namespace Notifer;

class Message implements Notifer
{
	public string $message;

	public function __construct(string $message)
	{
		$this->message = $message;
	}
	public function send()
	{
		return $this->message . "<br>";
	}
}
