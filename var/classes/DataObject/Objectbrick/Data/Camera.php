<?php

/**
 * Fields Summary:
 * - CameraType [input]
 * - Color [rgbaColor]
 * - Brand [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Camera extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Camera";
protected $CameraType;
protected $Color;
protected $Brand;


/**
* Camera constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get CameraType - Camera Type
* @return string|null
*/
public function getCameraType(): ?string
{
	$data = $this->CameraType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("CameraType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("CameraType");
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
* Set CameraType - Camera Type
* @param string|null $CameraType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Camera
*/
public function setCameraType (?string $CameraType)
{
	$this->CameraType = $CameraType;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Camera
*/
public function setColor (?\Pimcore\Model\DataObject\Data\RgbaColor $Color)
{
	$this->Color = $Color;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Camera
*/
public function setBrand (?string $Brand)
{
	$this->Brand = $Brand;

	return $this;
}

}

