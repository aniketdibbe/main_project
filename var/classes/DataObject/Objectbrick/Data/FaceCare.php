<?php

/**
 * Fields Summary:
 * - Category [input]
 * - Quantity [numeric]
 * - Brand [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class FaceCare extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "FaceCare";
protected $Category;
protected $Quantity;
protected $Brand;


/**
* FaceCare constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get Category - Category
* @return string|null
*/
public function getCategory(): ?string
{
	$data = $this->Category;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Category")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Category");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Category - Category
* @param string|null $Category
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FaceCare
*/
public function setCategory (?string $Category)
{
	$this->Category = $Category;

	return $this;
}

/**
* Get Quantity - Quantity
* @return float|null
*/
public function getQuantity(): ?float
{
	$data = $this->Quantity;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Quantity")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Quantity");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Quantity - Quantity
* @param float|null $Quantity
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FaceCare
*/
public function setQuantity (?float $Quantity)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("Quantity");
	$this->Quantity = $fd->preSetData($this, $Quantity);
	return $this;
}

/**
* Get Brand - Brand
* @return string|null
*/
public function getBrand(): ?string
{
	$data = $this->Brand;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Brand")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Brand");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Brand - Brand
* @param string|null $Brand
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FaceCare
*/
public function setBrand (?string $Brand)
{
	$this->Brand = $Brand;

	return $this;
}

}

