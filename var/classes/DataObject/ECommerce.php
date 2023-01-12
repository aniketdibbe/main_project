<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - elSKU [input]
 * - electronics [classificationstore]
 * - warranty [numeric]
 * - madeIn [country]
 * - Beauty [classificationstore]
 * - ManufacturingDate [date]
 * - ExpiryDate [date]
 * - Gender [select]
 * - image [image]
 * - price [numeric]
 * - offer [numeric]
 * - off [input]
 * - description [textarea]
 * - Foot [classificationstore]
 * - manufacture [date]
 * - expiry [date]
 * - FootwearType [select]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\ECommerce\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByElSKU($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByWarranty($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByMadeIn($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByManufacturingDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByExpiryDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByGender($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByImage($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByOffer($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByOff($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByManufacture($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByExpiry($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByFootwearType($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class ECommerce extends Concrete
{
protected $o_classId = "1";
protected $o_className = "ECommerce";
protected $elSKU;
protected $electronics;
protected $warranty;
protected $madeIn;
protected $Beauty;
protected $ManufacturingDate;
protected $ExpiryDate;
protected $Gender;
protected $image;
protected $price;
protected $offer;
protected $off;
protected $description;
protected $Foot;
protected $manufacture;
protected $expiry;
protected $FootwearType;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\ECommerce
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get elSKU - El S K U
* @return string|null
*/
public function getElSKU(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("elSKU");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->elSKU;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set elSKU - El S K U
* @param string|null $elSKU
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setElSKU(?string $elSKU)
{
	$this->elSKU = $elSKU;

	return $this;
}

/**
* Get electronics - Electronics
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getElectronics(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("electronics");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("electronics")->preGetData($this);

	return $data;
}

/**
* Set electronics - Electronics
* @param \Pimcore\Model\DataObject\Classificationstore|null $electronics
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setElectronics(?\Pimcore\Model\DataObject\Classificationstore $electronics)
{
	$this->electronics = $electronics;

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
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setWarranty(?float $warranty)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("warranty");
	$this->warranty = $fd->preSetData($this, $warranty);
	return $this;
}

/**
* Get madeIn - Made In
* @return string|null
*/
public function getMadeIn(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("madeIn");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->madeIn;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set madeIn - Made In
* @param string|null $madeIn
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setMadeIn(?string $madeIn)
{
	$this->madeIn = $madeIn;

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
* @return \Pimcore\Model\DataObject\ECommerce
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
* @return \Pimcore\Model\DataObject\ECommerce
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
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setExpiryDate(?\Carbon\Carbon $ExpiryDate)
{
	$this->ExpiryDate = $ExpiryDate;

	return $this;
}

/**
* Get Gender - Gender
* @return string|null
*/
public function getGender(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Gender");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Gender;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Gender - Gender
* @param string|null $Gender
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setGender(?string $Gender)
{
	$this->Gender = $Gender;

	return $this;
}

/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("image");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->image;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set image - Image
* @param \Pimcore\Model\Asset\Image|null $image
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setImage(?\Pimcore\Model\Asset\Image $image)
{
	$this->image = $image;

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
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setPrice(?float $price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

/**
* Get offer - Offer
* @return float|null
*/
public function getOffer(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("offer");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->offer;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set offer - Offer
* @param float|null $offer
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setOffer(?float $offer)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("offer");
	$this->offer = $fd->preSetData($this, $offer);
	return $this;
}

/**
* Get off - Off
* @return string|null
*/
public function getOff(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("off");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->off;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set off - Off
* @param string|null $off
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setOff(?string $off)
{
	$this->off = $off;

	return $this;
}

/**
* Get description - Description
* @return string|null
*/
public function getDescription(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("description");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->description;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set description - Description
* @param string|null $description
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setDescription(?string $description)
{
	$this->description = $description;

	return $this;
}

/**
* Get Foot - Foot
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getFoot(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Foot");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Foot")->preGetData($this);

	return $data;
}

/**
* Set Foot - Foot
* @param \Pimcore\Model\DataObject\Classificationstore|null $Foot
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setFoot(?\Pimcore\Model\DataObject\Classificationstore $Foot)
{
	$this->Foot = $Foot;

	return $this;
}

/**
* Get manufacture - Manufacture
* @return \Carbon\Carbon|null
*/
public function getManufacture(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("manufacture");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->manufacture;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set manufacture - Manufacture
* @param \Carbon\Carbon|null $manufacture
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setManufacture(?\Carbon\Carbon $manufacture)
{
	$this->manufacture = $manufacture;

	return $this;
}

/**
* Get expiry - Expiry
* @return \Carbon\Carbon|null
*/
public function getExpiry(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("expiry");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->expiry;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set expiry - Expiry
* @param \Carbon\Carbon|null $expiry
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setExpiry(?\Carbon\Carbon $expiry)
{
	$this->expiry = $expiry;

	return $this;
}

/**
* Get FootwearType - Footwear Type
* @return string|null
*/
public function getFootwearType(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("FootwearType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->FootwearType;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set FootwearType - Footwear Type
* @param string|null $FootwearType
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setFootwearType(?string $FootwearType)
{
	$this->FootwearType = $FootwearType;

	return $this;
}

}

