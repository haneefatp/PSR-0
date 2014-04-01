<?php
namespace Vendor\Package;

class TestClassTwo
{
	public $testVar = 0;

	public function __cunstruct()
	{
		$this->testVar = 1;
	}

	public function test()
	{	
	    return 'Hello Two';
	}
}
