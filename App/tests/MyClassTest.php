<?php

/**
 * Unit tests for MyClass
 *
 * PHP Version 7
 *
 * @File      MyClassTest.php
 * @category  Unit Testing
 * @package   Big Dummy
 * @author    Stephen Wardill <s5n.wardill@gmail.com>
 * @copyright 2017 Stephen Wardill
 * @license   https://www.gnu.org/licenses/gpl.txt GPL 3.1
 * @link      https://github.com/paleo9
 */


namespace PHPUnit;

use PHPUnit\Framework\TestCase;
use Paleo9\Classes\MyClass;

class MyClassTest extends TestCase
{
    public function testMakeParagraph()
    {
        $original = "Hello World";
        $expected = "<p>$original</p>";

        $myClass = new MyClass;
        $actual = $myClass->makeParagraph($original);

        $this->assertEquals($actual, $expected);
    }
}
