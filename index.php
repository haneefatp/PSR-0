<?php
ini_set('display_errors', 1);
/**
 * Implementation of SplClassLoader - PSR-0
 * standards for PHP 5.3 namespaces and class names.
 *
 * Example which loads classes for testing purpose
 *
 * @package     PHP
 * @category    Coding Standard
 * @params      plClassLoader('Namespace', '/var/www/path to project');
 * @author      Haneefa<haneefa@digitalbrandgroup.com>
 * @date        Mar 16, 2014 
 * @version     1.0
 * ==============================================================================================
 * Change History:
 * ----------------------------------------------------------------------------------------------
 * Sl.No.  Date           Author     Description
 * ----------------------------------------------------------------------------------------------
 * 1       Apr 01, 2014   Haneefa    Comments and allignemnet updated
 * ----------------------------------------------------------------------------------------------
 */
require_once('Vendor/Library/SplClassLoader.php');
$classLoader = new SplClassLoader('Vendor\Package', '/var/www/PSR-0');
$classLoader->register();

use Vendor\Package\TestClass;
$testClassLoader = new TestClass();    
echo $testClassLoader->test();

echo "<br />";

use Vendor\Package\TestClassTwo;
$testClassLoaderTwo = new TestClassTwo();
echo $testClassLoaderTwo->test();