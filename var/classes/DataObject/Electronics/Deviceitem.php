<?php

namespace Pimcore\Model\DataObject\Electronics;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Deviceitem extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['Laptop','Camera','Mobile'];


protected $Laptop = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop|null
*/
public function getLaptop(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Laptop) &&
		$this->Laptop->getDoDelete()) {
			return null;
	}
	return $this->Laptop;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Laptop $Laptop
* @return \Pimcore\Model\DataObject\Electronics\Deviceitem
*/
public function setLaptop($Laptop)
{
	$this->Laptop = $Laptop;
	return $this;
}

protected $Camera = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Camera|null
*/
public function getCamera(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Camera) &&
		$this->Camera->getDoDelete()) {
			return null;
	}
	return $this->Camera;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Camera $Camera
* @return \Pimcore\Model\DataObject\Electronics\Deviceitem
*/
public function setCamera($Camera)
{
	$this->Camera = $Camera;
	return $this;
}

protected $Mobile = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Mobile|null
*/
public function getMobile(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Mobile) &&
		$this->Mobile->getDoDelete()) {
			return null;
	}
	return $this->Mobile;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Mobile $Mobile
* @return \Pimcore\Model\DataObject\Electronics\Deviceitem
*/
public function setMobile($Mobile)
{
	$this->Mobile = $Mobile;
	return $this;
}

}

