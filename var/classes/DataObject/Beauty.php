<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - BeautyType [select]
 * - Description [textarea]
 * - Images [image]
 * - Price [numeric]
 * - MadeinCountry [country]
 * - Beauty [classificationstore]
 * - ManufacturingDate [date]
 * - ExpiryDate [date]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Beauty\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByBeautyType($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByImages($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByMadeinCountry($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByManufacturingDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByExpiryDate($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Beauty extends Concrete
{
protected $o_classId = "4";
protected $o_className = "Beauty";
protected $BeautyType;
protected $Description;
protected $Images;
protected $Price;
protected $MadeinCountry;
protected $Beauty;
protected $ManufacturingDate;
protected $ExpiryDate;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Beauty
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get BeautyType - Beauty Type
* @return string|null
*/
public function getBeautyType(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("BeautyType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->BeautyType;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set BeautyType - Beauty Type
* @param string|null $BeautyType
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setBeautyType(?string $BeautyType)
{
	$this->BeautyType = $BeautyType;

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
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setDescription(?string $Description)
{
	$this->Description = $Description;

	return $this;
}

/**
* Get Images - Images
* @return \Pimcore\Model\Asset\Image|null
*/
public function getImages(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Images");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Images;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Images - Images
* @param \Pimcore\Model\Asset\Image|null $Images
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setImages(?\Pimcore\Model\Asset\Image $Images)
{
	$this->Images = $Images;

	return $this;
}

/**
* Get Price - Price
* @return float|null
*/
public function getPrice(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Price");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Price;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Price - Price
* @param float|null $Price
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setPrice(?float $Price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("Price");
	$this->Price = $fd->preSetData($this, $Price);
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
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setMadeinCountry(?string $MadeinCountry)
{
	$this->MadeinCountry = $MadeinCountry;

	return $this;
}

/**
* Get Beauty - Beauty
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getBeauty(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Beauty");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Beauty")->preGetData($this);

	return $data;
}

/**
* Set Beauty - Beauty
* @param \Pimcore\Model\DataObject\Classificationstore|null $Beauty
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setBeauty(?\Pimcore\Model\DataObject\Classificationstore $Beauty)
{
	$this->Beauty = $Beauty;

	return $this;
}

/**
* Get ManufacturingDate - Manufacturing Date
* @return \Carbon\Carbon|null
*/
public function getManufacturingDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ManufacturingDate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ManufacturingDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ManufacturingDate - Manufacturing Date
* @param \Carbon\Carbon|null $ManufacturingDate
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setManufacturingDate(?\Carbon\Carbon $ManufacturingDate)
{
	$this->ManufacturingDate = $ManufacturingDate;

	return $this;
}

/**
* Get ExpiryDate - Expiry Date
* @return \Carbon\Carbon|null
*/
public function getExpiryDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ExpiryDate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ExpiryDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ExpiryDate - Expiry Date
* @param \Carbon\Carbon|null $ExpiryDate
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setExpiryDate(?\Carbon\Carbon $ExpiryDate)
{
	$this->ExpiryDate = $ExpiryDate;

	return $this;
}

}

