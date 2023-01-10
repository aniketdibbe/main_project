<?php

namespace Pimcore\Model\DataObject\ECommerce;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\ECommerce|false current()
 * @method DataObject\ECommerce[] load()
 * @method DataObject\ECommerce[] getData()
 * @method DataObject\ECommerce[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "1";
protected $className = "ECommerce";


/**
* Filter by elSKU (El S K U)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByElSKU ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("elSKU")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by warranty (Warranty)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByWarranty ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("warranty")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by madeIn (Made In)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByMadeIn ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("madeIn")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by ManufacturingDate (Manufacturing Date)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByManufacturingDate ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ManufacturingDate")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by ExpiryDate (Expiry Date)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByExpiryDate ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ExpiryDate")->addListingFilter($this, $data, $operator);
	return $this;
}



}
