<?php
namespace Chris\HelloWorld;

class Index
{
	public function greet(string $greet = 'Hello , World') : string
	{
		return $greet;
	}
}