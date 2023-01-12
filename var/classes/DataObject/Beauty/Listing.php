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
<<<<<<< HEAD
protected $classId = "3";
protected $className = "Beauty";


=======
protected $classId = "4";
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

>>>>>>> d70caed15eef289352ecaff2364ea7109a18d45d


}
