<?php
/**
 * A test file to try out phpdocumentor, composer and related utilities.
 *
 * PHP Version 7
 *
 * @author    Stephen Wardill <s5n.wardill@gmail.com>
 * @copyright 2017 Stephen Wardill
 * @license   https://www.gnu.org/licenses/gpl.txt GPL 3.1
 * @link      https://github.com/paleo9 Github Repositories
 */

namespace Paleo9;

require("vendor/autoload.php");

use \Paleo9\Classes\TestClass;

$text = "All is well";

$myClass = new Classes\TestClass();
$para = $myClass->makeParagraph($text);

echo $para;
