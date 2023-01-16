<?php

namespace Pimcore\Model\DataObject\Beauty;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class BeautyProductType extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['BodyCare','FaceCare','HairCare','Makeup'];


protected $BodyCare = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\BodyCare|null
*/
public function getBodyCare(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->BodyCare) &&
		$this->BodyCare->getDoDelete()) {
			return null;
	}
	return $this->BodyCare;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\BodyCare $BodyCare
* @return \Pimcore\Model\DataObject\Beauty\BeautyProductType
*/
public function setBodyCare($BodyCare)
{
	$this->BodyCare = $BodyCare;
	return $this;
}

protected $FaceCare = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FaceCare|null
*/
public function getFaceCare(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->FaceCare) &&
		$this->FaceCare->getDoDelete()) {
			return null;
	}
	return $this->FaceCare;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\FaceCare $FaceCare
* @return \Pimcore\Model\DataObject\Beauty\BeautyProductType
*/
public function setFaceCare($FaceCare)
{
	$this->FaceCare = $FaceCare;
	return $this;
}

protected $HairCare = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare|null
*/
public function getHairCare(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->HairCare) &&
		$this->HairCare->getDoDelete()) {
			return null;
	}
	return $this->HairCare;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\HairCare $HairCare
* @return \Pimcore\Model\DataObject\Beauty\BeautyProductType
*/
public function setHairCare($HairCare)
{
	$this->HairCare = $HairCare;
	return $this;
}

protected $Makeup = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup|null
*/
public function getMakeup(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Makeup) &&
		$this->Makeup->getDoDelete()) {
			return null;
	}
	return $this->Makeup;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Makeup $Makeup
* @return \Pimcore\Model\DataObject\Beauty\BeautyProductType
*/
public function setMakeup($Makeup)
{
	$this->Makeup = $Makeup;
	return $this;
}

}

