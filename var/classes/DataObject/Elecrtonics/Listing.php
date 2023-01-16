<?php

namespace Pimcore\Model\DataObject\Elecrtonics;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Elecrtonics|false current()
 * @method DataObject\Elecrtonics[] load()
 * @method DataObject\Elecrtonics[] getData()
 * @method DataObject\Elecrtonics[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "2";
protected $className = "Elecrtonics";


/**
* Filter by ElectronicType (Electronic Type)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByElectronicType ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ElectronicType")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by category (Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCategory ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("category")->addListingFilter($this, $data, $operator);
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
* Filter by MadeinCountry (Madein Country)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByMadeinCountry ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("MadeinCountry")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by price (Price)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("price")->addListingFilter($this, $data, $operator);
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



}
