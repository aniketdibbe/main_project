<?php

namespace Pimcore\Model\DataObject\Clothing;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Clothing|false current()
 * @method DataObject\Clothing[] load()
 * @method DataObject\Clothing[] getData()
 * @method DataObject\Clothing[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "5";
protected $className = "clothing";


/**
* Filter by WearType (Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByWearType ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("WearType")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by gender (Gender)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByGender ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("gender")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by clothingType (Clothing Type)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByClothingType ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("clothingType")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by images (Images)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByImages ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("images")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Price (Price)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Price")->addListingFilter($this, $data, $operator);
	return $this;
}



}
