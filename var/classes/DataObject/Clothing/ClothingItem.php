<?php

namespace Pimcore\Model\DataObject\Clothing;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class ClothingItem extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['EthinicWear','SportsWear','WesternWear','WinterWear'];


protected $EthinicWear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\EthinicWear|null
*/
public function getEthinicWear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->EthinicWear) &&
		$this->EthinicWear->getDoDelete()) {
			return null;
	}
	return $this->EthinicWear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\EthinicWear $EthinicWear
* @return \Pimcore\Model\DataObject\Clothing\ClothingItem
*/
public function setEthinicWear($EthinicWear)
{
	$this->EthinicWear = $EthinicWear;
	return $this;
}

protected $SportsWear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SportsWear|null
*/
public function getSportsWear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->SportsWear) &&
		$this->SportsWear->getDoDelete()) {
			return null;
	}
	return $this->SportsWear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\SportsWear $SportsWear
* @return \Pimcore\Model\DataObject\Clothing\ClothingItem
*/
public function setSportsWear($SportsWear)
{
	$this->SportsWear = $SportsWear;
	return $this;
}

protected $WesternWear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WesternWear|null
*/
public function getWesternWear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->WesternWear) &&
		$this->WesternWear->getDoDelete()) {
			return null;
	}
	return $this->WesternWear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\WesternWear $WesternWear
* @return \Pimcore\Model\DataObject\Clothing\ClothingItem
*/
public function setWesternWear($WesternWear)
{
	$this->WesternWear = $WesternWear;
	return $this;
}

protected $WinterWear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WinterWear|null
*/
public function getWinterWear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->WinterWear) &&
		$this->WinterWear->getDoDelete()) {
			return null;
	}
	return $this->WinterWear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\WinterWear $WinterWear
* @return \Pimcore\Model\DataObject\Clothing\ClothingItem
*/
public function setWinterWear($WinterWear)
{
	$this->WinterWear = $WinterWear;
	return $this;
}

}

