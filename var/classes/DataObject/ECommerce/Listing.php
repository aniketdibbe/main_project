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

/**
* Filter by Gender (Gender)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByGender ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Gender")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by image (Image)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByImage ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("image")->addListingFilter($this, $data, $operator);
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
* Filter by offer (Offer)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOffer ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("offer")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by off (Off)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOff ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("off")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by description (Description)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDescription ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("description")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by manufacture (Manufacture)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByManufacture ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("manufacture")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by expiry (Expiry)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByExpiry ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("expiry")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by FootwearType (Footwear Type)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByFootwearType ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("FootwearType")->addListingFilter($this, $data, $operator);
	return $this;
}



}
