<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - BeautyType [select]
 * - BeautyProductType [objectbricks]
 * - Images [image]
 * - Price [numeric]
 * - MadeInCountry [country]
 * - Manufacture [date]
 * - Expiry [date]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Beauty\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByBeautyType($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByImages($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByMadeInCountry($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByManufacture($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByExpiry($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Beauty extends Concrete
{
protected $o_classId = "3";
protected $o_className = "Beauty";
protected $BeautyType;
protected $BeautyProductType;
protected $Images;
protected $Price;
protected $MadeInCountry;
protected $Manufacture;
protected $Expiry;


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
* @return \Pimcore\Model\DataObject\Beauty\BeautyProductType
*/
public function getBeautyProductType(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->BeautyProductType;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\BeautyProductType")) {
			$data = new \Pimcore\Model\DataObject\Beauty\BeautyProductType($this, "BeautyProductType");
			$this->BeautyProductType = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("BeautyProductType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set BeautyProductType - Beauty Product Type
* @param \Pimcore\Model\DataObject\Objectbrick|null $BeautyProductType
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setBeautyProductType(?\Pimcore\Model\DataObject\Objectbrick $BeautyProductType)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("BeautyProductType");
	$this->BeautyProductType = $fd->preSetData($this, $BeautyProductType);
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
* Get MadeInCountry - Made In Country
* @return string|null
*/
public function getMadeInCountry(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("MadeInCountry");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->MadeInCountry;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set MadeInCountry - Made In Country
* @param string|null $MadeInCountry
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setMadeInCountry(?string $MadeInCountry)
{
	$this->MadeInCountry = $MadeInCountry;

	return $this;
}

/**
* Get Manufacture - Manufacture
* @return \Carbon\Carbon|null
*/
public function getManufacture(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Manufacture");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Manufacture;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Manufacture - Manufacture
* @param \Carbon\Carbon|null $Manufacture
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setManufacture(?\Carbon\Carbon $Manufacture)
{
	$this->Manufacture = $Manufacture;

	return $this;
}

/**
* Get Expiry - Expiry
* @return \Carbon\Carbon|null
*/
public function getExpiry(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Expiry");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Expiry;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Expiry - Expiry
* @param \Carbon\Carbon|null $Expiry
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setExpiry(?\Carbon\Carbon $Expiry)
{
	$this->Expiry = $Expiry;

	return $this;
}

}

