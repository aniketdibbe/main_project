<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - gender [select]
 * - category [classificationstore]
 * - images [image]
 * - Description [textarea]
 * - Query [objectbricks]
 * - SKU [input]
 * - Electronics [classificationstore]
 * - MadeInCountry [country]
 * - Warranty [numeric]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getByGender($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getByImages($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getBySKU($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getByMadeInCountry($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Ecommerce\Listing|\Pimcore\Model\DataObject\Ecommerce|null getByWarranty($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Ecommerce extends Concrete
{
protected $o_classId = "1";
protected $o_className = "Ecommerce";
protected $gender;
protected $category;
protected $images;
protected $Description;
protected $Query;
protected $SKU;
protected $Electronics;
protected $MadeInCountry;
protected $Warranty;


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

/**
* Get SKU - S K U
* @return string|null
*/
public function getSKU(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("SKU");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->SKU;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set SKU - S K U
* @param string|null $SKU
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public function setSKU(?string $SKU)
{
	$this->SKU = $SKU;

	return $this;
}

/**
* Get Electronics - Electronics
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getElectronics(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Electronics");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Electronics")->preGetData($this);

	return $data;
}

/**
* Set Electronics - Electronics
* @param \Pimcore\Model\DataObject\Classificationstore|null $Electronics
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public function setElectronics(?\Pimcore\Model\DataObject\Classificationstore $Electronics)
{
	$this->Electronics = $Electronics;

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
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public function setMadeInCountry(?string $MadeInCountry)
{
	$this->MadeInCountry = $MadeInCountry;

	return $this;
}

/**
* Get Warranty - Warranty
* @return float|null
*/
public function getWarranty(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Warranty");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Warranty;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Warranty - Warranty
* @param float|null $Warranty
* @return \Pimcore\Model\DataObject\Ecommerce
*/
public function setWarranty(?float $Warranty)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("Warranty");
	$this->Warranty = $fd->preSetData($this, $Warranty);
	return $this;
}

}

