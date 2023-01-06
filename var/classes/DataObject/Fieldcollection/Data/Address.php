<?php

/**
 * Fields Summary:
 * - Name [input]
 * - Mobile [numeric]
 * - pincode [numeric]
 * - Address [textarea]
 * - city [input]
 */

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

class Address extends DataObject\Fieldcollection\Data\AbstractData
{
protected $type = "address";
protected $Name;
protected $Mobile;
protected $pincode;
protected $Address;
protected $city;


/**
* Get Name - Name
* @return string|null
*/
public function getName(): ?string
{
	$data = $this->Name;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Name - Name
* @param string|null $Name
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\Address
*/
public function setName(?string $Name)
{
	$this->Name = $Name;

	return $this;
}

/**
* Get Mobile - Mobile
* @return float|null
*/
public function getMobile(): ?float
{
	$data = $this->Mobile;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Mobile - Mobile
* @param float|null $Mobile
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\Address
*/
public function setMobile(?float $Mobile)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("Mobile");
	$this->Mobile = $fd->preSetData($this, $Mobile);
	return $this;
}

/**
* Get pincode - Pincode
* @return float|null
*/
public function getPincode(): ?float
{
	$data = $this->pincode;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set pincode - Pincode
* @param float|null $pincode
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\Address
*/
public function setPincode(?float $pincode)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("pincode");
	$this->pincode = $fd->preSetData($this, $pincode);
	return $this;
}

/**
* Get Address - Address
* @return string|null
*/
public function getAddress(): ?string
{
	$data = $this->Address;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Address - Address
* @param string|null $Address
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\Address
*/
public function setAddress(?string $Address)
{
	$this->Address = $Address;

	return $this;
}

/**
* Get city - City
* @return string|null
*/
public function getCity(): ?string
{
	$data = $this->city;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set city - City
* @param string|null $city
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\Address
*/
public function setCity(?string $city)
{
	$this->city = $city;

	return $this;
}

}

