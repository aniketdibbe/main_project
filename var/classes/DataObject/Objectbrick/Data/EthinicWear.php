<?php

/**
 * Fields Summary:
 * - category [input]
 * - Size [numeric]
 * - Color [rgbaColor]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class EthinicWear extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "EthinicWear";
protected $category;
protected $Size;
protected $Color;


/**
* EthinicWear constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get category - Category
* @return string|null
*/
public function getCategory(): ?string
{
	$data = $this->category;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("category")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("category");
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
* Set category - Category
* @param string|null $category
* @return \Pimcore\Model\DataObject\Objectbrick\Data\EthinicWear
*/
public function setCategory (?string $category)
{
	$this->category = $category;

	return $this;
}

/**
* Get Size - Size
* @return float|null
*/
public function getSize(): ?float
{
	$data = $this->Size;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Size")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Size");
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
* Set Size - Size
* @param float|null $Size
* @return \Pimcore\Model\DataObject\Objectbrick\Data\EthinicWear
*/
public function setSize (?float $Size)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("Size");
	$this->Size = $fd->preSetData($this, $Size);
	return $this;
}

/**
* Get Color - Color
* @return \Pimcore\Model\DataObject\Data\RgbaColor|null
*/
public function getColor(): ?\Pimcore\Model\DataObject\Data\RgbaColor
{
	$data = $this->Color;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Color")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Color");
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
* Set Color - Color
* @param \Pimcore\Model\DataObject\Data\RgbaColor|null $Color
* @return \Pimcore\Model\DataObject\Objectbrick\Data\EthinicWear
*/
public function setColor (?\Pimcore\Model\DataObject\Data\RgbaColor $Color)
{
	$this->Color = $Color;

	return $this;
}

}

