<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - WearType [input]
 * - gender [select]
 * - clothingType [select]
 * - images [image]
 * - Price [numeric]
 * - ClothingItem [objectbricks]
 * - category [classificationstore]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Clothing\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByWearType($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByGender($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByClothingType($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByImages($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Clothing extends Concrete
{
protected $o_classId = "3";
protected $o_className = "clothing";
protected $WearType;
protected $gender;
protected $clothingType;
protected $images;
protected $Price;
protected $ClothingItem;
protected $category;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Clothing
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get WearType - Wear Type
* @return string|null
*/
public function getWearType(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("WearType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->WearType;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set WearType - Wear Type
* @param string|null $WearType
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setWearType(?string $WearType)
{
	$this->WearType = $WearType;

	return $this;
}

/**
* Get gender - Gender
* @return string|null
*/
public function getGender(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("gender");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->gender;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set gender - Gender
* @param string|null $gender
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setGender(?string $gender)
{
	$this->gender = $gender;

	return $this;
}

/**
* Get clothingType - Clothing Type
* @return string|null
*/
public function getClothingType(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("clothingType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->clothingType;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set clothingType - Clothing Type
* @param string|null $clothingType
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setClothingType(?string $clothingType)
{
	$this->clothingType = $clothingType;

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
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setImages(?\Pimcore\Model\Asset\Image $images)
{
	$this->images = $images;

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
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setPrice(?float $Price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("Price");
	$this->Price = $fd->preSetData($this, $Price);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Clothing\ClothingItem
*/
public function getClothingItem(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->ClothingItem;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Clothing\\ClothingItem")) {
			$data = new \Pimcore\Model\DataObject\Clothing\ClothingItem($this, "ClothingItem");
			$this->ClothingItem = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ClothingItem");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set ClothingItem - Clothing Item
* @param \Pimcore\Model\DataObject\Objectbrick|null $ClothingItem
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setClothingItem(?\Pimcore\Model\DataObject\Objectbrick $ClothingItem)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("ClothingItem");
	$this->ClothingItem = $fd->preSetData($this, $ClothingItem);
	return $this;
}

/**
* Get category - Category
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getCategory(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("category");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("category")->preGetData($this);

	return $data;
}

/**
* Set category - Category
* @param \Pimcore\Model\DataObject\Classificationstore|null $category
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setCategory(?\Pimcore\Model\DataObject\Classificationstore $category)
{
	$this->category = $category;

	return $this;
}

}

