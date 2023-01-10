<?php

namespace Pimcore\Model\DataObject\Ecommerce;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Ecommerce|false current()
 * @method DataObject\Ecommerce[] load()
 * @method DataObject\Ecommerce[] getData()
 * @method DataObject\Ecommerce[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "1";
protected $className = "Ecommerce";


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
* Filter by Description (Description)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDescription ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Description")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by SKU (S K U)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySKU ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("SKU")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by MadeInCountry (Made In Country)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByMadeInCountry ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("MadeInCountry")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Warranty (Warranty)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByWarranty ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Warranty")->addListingFilter($this, $data, $operator);
	return $this;
}



}
