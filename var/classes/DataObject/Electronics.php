<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - ElectronicType [input]
 * - Description [textarea]
 * - images [image]
 * - MadeinCountry [country]
 * - price [numeric]
 * - warranty [numeric]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Electronics\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByElectronicType($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByImages($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByMadeinCountry($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByWarranty($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Electronics extends Concrete
{
protected $o_classId = "2";
protected $o_className = "Electronics";
protected $ElectronicType;
protected $Description;
protected $images;
protected $MadeinCountry;
protected $price;
protected $warranty;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Electronics
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get ElectronicType - Name
* @return string|null
*/
public function getElectronicType(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ElectronicType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ElectronicType;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ElectronicType - Name
* @param string|null $ElectronicType
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setElectronicType(?string $ElectronicType)
{
	$this->ElectronicType = $ElectronicType;

	return $this;
}

/**
* Get Description - Description
* @return string|null
*/
public function getDescription(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Description");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Description;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Description - Description
* @param string|null $Description
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setDescription(?string $Description)
{
	$this->Description = $Description;

	return $this;
}

/**
* Get images - Images
* @return \Pimcore\Model\Asset\Image|null
*/
public function getImages(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("images");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->images;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set images - Images
* @param \Pimcore\Model\Asset\Image|null $images
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setImages(?\Pimcore\Model\Asset\Image $images)
{
	$this->images = $images;

	return $this;
}

/**
* Get MadeinCountry - Madein Country
* @return string|null
*/
public function getMadeinCountry(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("MadeinCountry");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->MadeinCountry;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set MadeinCountry - Madein Country
* @param string|null $MadeinCountry
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setMadeinCountry(?string $MadeinCountry)
{
	$this->MadeinCountry = $MadeinCountry;

	return $this;
}

/**
* Get price - Price
* @return float|null
*/
public function getPrice(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("price");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->price;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set price - Price
* @param float|null $price
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setPrice(?float $price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

/**
* Get warranty - Warranty
* @return float|null
*/
public function getWarranty(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("warranty");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->warranty;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set warranty - Warranty
* @param float|null $warranty
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setWarranty(?float $warranty)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("warranty");
	$this->warranty = $fd->preSetData($this, $warranty);
	return $this;
}

}

