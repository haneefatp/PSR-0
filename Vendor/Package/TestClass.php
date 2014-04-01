<?php
/**
 * Test Class - PSR-0
 * Test class to be autoloaded
 *
 * Test code to return 'Hello World'
 *
 * @package     PHP
 * @category    Coding Standard
 * @params      $testVar String
 * @author      Haneefa<haneefa@digitalbrandgroup.com>
 * @date        Mar 16, 2014 
 * @version     1.0
 * ==============================================================================================
 * Change History:
 * ----------------------------------------------------------------------------------------------
 * Sl.No.  Date           Author     Description
 * ----------------------------------------------------------------------------------------------
 * 1       Apr 01, 2014   Haneefa    Comments updated
 * ----------------------------------------------------------------------------------------------
 */
namespace Vendor\Package;

class TestClass
{	
	//test variable 
	//@type String
	public $testVar = 0;

	/**
     * Function test() 
     * Set test variable 
     * @author 	Haneefa Abdulla
     * @type	PSR-0 - Test Class
     * @param	void()
     * @return	$testVar
     * @date	Mar 16, 2014
     */
	public function test()
	{	
	    $this->testVar = 'Hello World';
	    return $this->testVar;
	}
}
