<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - WearType [input]
 * - gender [select]
 * - category [classificationstore]
 * - images [image]
 * - Description [textarea]
 * - Price [numeric]
 * - Query [objectbricks]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getByWearType($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getByGender($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getByImages($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Ecommerce extends Concrete
{
protected $o_classId = "1";
protected $o_className = "Ecommerce";
protected $WearType;
protected $gender;
protected $category;
protected $images;
protected $Description;
protected $Price;
protected $Query;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get WearType - Name
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
* Set WearType - Name
* @param string|null $WearType
* @return \Pimcore\Model\DataObject\Ecommerce
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
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public function setGender(?string $gender)
{
	$this->gender = $gender;

	return $this;
}

/**
* Get category - category
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
* Set category - category
* @param \Pimcore\Model\DataObject\Classificationstore|null $category
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public function setCategory(?\Pimcore\Model\DataObject\Classificationstore $category)
{
	$this->category = $category;

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
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public function setImages(?\Pimcore\Model\Asset\Image $images)
{
	$this->images = $images;

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
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public function setDescription(?string $Description)
{
	$this->Description = $Description;

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
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public function setPrice(?float $Price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("Price");
	$this->Price = $fd->preSetData($this, $Price);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Ecommerce\Query
*/
public function getQuery(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->Query;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Ecommerce\\Query")) {
			$data = new \Pimcore\Model\DataObject\Ecommerce\Query($this, "Query");
			$this->Query = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Query");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set Query - Query
* @param \Pimcore\Model\DataObject\Objectbrick|null $Query
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public function setQuery(?\Pimcore\Model\DataObject\Objectbrick $Query)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("Query");
	$this->Query = $fd->preSetData($this, $Query);
	return $this;
}

}

