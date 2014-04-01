<?php
ini_set('display_errors', 1);
/**
 * Implementation of SplClassLoader
 * standards for PHP 5.3 namespaces and class names.
 *
 * http://groups.google.com/group/php-standards/web/final-proposal
 *
 *     // Example which loads classes for the Doctrine Common package in the
 *     // Doctrine\Common namespace.
 *     $classLoader = new SplClassLoader('Doctrine\Common', '/path/to/doctrine');
 *     $classLoader->register();
 *
 * @author Haneefa <haneefa@digitalbrandgroup.com>
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
