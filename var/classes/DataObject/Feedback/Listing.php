<?php

namespace Pimcore\Model\DataObject\Feedback;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Feedback|false current()
 * @method DataObject\Feedback[] load()
 * @method DataObject\Feedback[] getData()
 * @method DataObject\Feedback[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "6";
protected $className = "feedback";


/**
* Filter by name (Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("name")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by comments (Comments)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByComments ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("comments")->addListingFilter($this, $data, $operator);
	return $this;
}



}
