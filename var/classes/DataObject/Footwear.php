<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - Gender [select]
 * - footweartype [objectbricks]
 * - Image [image]
 * - Price [numeric]
 * - offer [numeric]
 * - off [input]
 * - Description [textarea]
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
protected $o_classId = "4";
protected $o_className = "Footwear";
protected $Gender;
protected $footweartype;
protected $Image;
protected $Price;
protected $offer;
protected $off;
protected $Description;
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
* @return \Pimcore\Model\DataObject\Footwear\Footweartype
*/
public function getFootweartype(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->footweartype;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Footwear\\Footweartype")) {
			$data = new \Pimcore\Model\DataObject\Footwear\Footweartype($this, "footweartype");
			$this->footweartype = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("footweartype");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set footweartype - Footweartype
* @param \Pimcore\Model\DataObject\Objectbrick|null $footweartype
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setFootweartype(?\Pimcore\Model\DataObject\Objectbrick $footweartype)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("footweartype");
	$this->footweartype = $fd->preSetData($this, $footweartype);
	return $this;
}

/**
* Get Image - Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Image");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Image;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Image - Image
* @param \Pimcore\Model\Asset\Image|null $Image
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setImage(?\Pimcore\Model\Asset\Image $Image)
{
	$this->Image = $Image;

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
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setPrice(?float $Price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("Price");
	$this->Price = $fd->preSetData($this, $Price);
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
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setDescription(?string $Description)
{
	$this->Description = $Description;

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

