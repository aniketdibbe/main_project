<?php

namespace Pimcore\Model\DataObject\Footwear;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Footweartype extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['Men','Women'];


protected $Men = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Men|null
*/
public function getMen(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Men) &&
		$this->Men->getDoDelete()) {
			return null;
	}
	return $this->Men;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Men $Men
* @return \Pimcore\Model\DataObject\Footwear\Footweartype
*/
public function setMen($Men)
{
	$this->Men = $Men;
	return $this;
}

protected $Women = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Women|null
*/
public function getWomen(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Women) &&
		$this->Women->getDoDelete()) {
			return null;
	}
	return $this->Women;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Women $Women
* @return \Pimcore\Model\DataObject\Footwear\Footweartype
*/
public function setWomen($Women)
{
	$this->Women = $Women;
	return $this;
}

}

