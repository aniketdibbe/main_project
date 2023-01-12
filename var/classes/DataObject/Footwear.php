<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - Gender [select]
 * - image [image]
 * - price [numeric]
 * - offer [numeric]
 * - off [input]
 * - description [textarea]
 * - footwear_shop [classificationstore]
 * - manufacture [date]
 * - expiry [date]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Footwear\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByGender($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByImage($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByOffer($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByOff($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByManufacture($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByExpiry($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Footwear extends Concrete
{
protected $o_classId = "1";
protected $o_className = "Footwear";
protected $Gender;
protected $image;
protected $price;
protected $offer;
protected $off;
protected $description;
protected $footwear_shop;
protected $manufacture;
protected $expiry;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Footwear
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
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
* @return \Pimcore\Model\DataObject\Footwear
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
* @return \Pimcore\Model\DataObject\Footwear
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
* @return \Pimcore\Model\DataObject\Footwear
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
* @return \Pimcore\Model\DataObject\Footwear
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
* @return \Pimcore\Model\DataObject\Footwear
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
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setDescription(?string $description)
{
	$this->description = $description;

	return $this;
}

/**
* Get footwear_shop - Footwear _shop
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getFootwear_shop(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("footwear_shop");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("footwear_shop")->preGetData($this);

	return $data;
}

/**
* Set footwear_shop - Footwear _shop
* @param \Pimcore\Model\DataObject\Classificationstore|null $footwear_shop
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setFootwear_shop(?\Pimcore\Model\DataObject\Classificationstore $footwear_shop)
{
	$this->footwear_shop = $footwear_shop;

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
* @return \Pimcore\Model\DataObject\Footwear
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
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setExpiry(?\Carbon\Carbon $expiry)
{
	$this->expiry = $expiry;

	return $this;
}

}

