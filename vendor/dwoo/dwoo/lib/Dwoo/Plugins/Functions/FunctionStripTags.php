<?php
namespace Dwoo\Plugins\Functions;

use Dwoo\Compiler;
use Dwoo\ICompilable;
use Dwoo\Plugin;

/**
 * Removes all html tags
 * <pre>
 *  * value : the string to process
 *  * addspace : if true, a space is added in place of every removed tag
 * </pre>
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 *
 * @author     David Sanchez <david38sanchez@gmail.com>
 * @copyright  Copyright (c) 2014, David Sanchez
 * @license    http://dwoo.org/LICENSE GNU Lesser General Public License v3.0
 * @link       http://dwoo.org/
 * @version    2.0
 * @date       2014-02-24
 * @package    Dwoo
 */
class FunctionStripTags extends Plugin implements ICompilable {

	public static function compile(Compiler $compiler, $value, $addspace = true) {
		if ($addspace === true) {
			return "preg_replace('#<[^>]*>#', ' ', $value)";
		}
		return "strip_tags($value)";
	}
}
