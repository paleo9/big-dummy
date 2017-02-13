<?php
/**
 * Class MyClass | A simple class for testing phpdocumentor and psr-4
 *
 * PHP Version 7
 *
 * @author Stephen Wardill <s5n.wardill@gmail.com>
 * @copyright 2017 Stephen Wardill
 * @license   https://www.gnu.org/licenses/gpl.txt GPL 3.1
 * @link      https://github.com/paleo9 Github Repositories
 */

namespace Paleo9\Classes;

/**
 * Class MyClass | A simple class for testing phpdocumentor and psr-4
 */
class MyClass
{

    /**
     * Class MyClass
     *
     * A simple constructor
     *
     * @method void myprint()
     */
    public function __construct()
    {
    }

    /**
     * A simple method, make an html paragraph from a given string
     *
     * @param string $text the text to modify
     *
     * @return string, the modified text
     */
    public function makeParagraph($text)
    {
        return "<p>$text</p>";
    }
}
