<?php

namespace Pimcore\Model\DataObject\Beauty;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Beauty|false current()
 * @method DataObject\Beauty[] load()
 * @method DataObject\Beauty[] getData()
 * @method DataObject\Beauty[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "3";
protected $className = "Beauty";


/**
* Filter by BeautyType (Beauty Type)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByBeautyType ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("BeautyType")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Images (Images)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByImages ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Images")->addListingFilter($this, $data, $operator);
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
* Filter by Manufacture (Manufacture)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByManufacture ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Manufacture")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Expiry (Expiry)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByExpiry ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Expiry")->addListingFilter($this, $data, $operator);
	return $this;
}



}
