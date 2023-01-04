<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Test2\Listing getList(array $config = [])
*/

class Test2 extends Concrete
{
protected $o_classId = "2";
protected $o_className = "test2";


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Test2
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

}

