<?php

namespace Pimcore\Model\DataObject\Ecommerce;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Query extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['Query'];


protected $Query = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Query|null
*/
public function getQuery(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Query) &&
		$this->Query->getDoDelete()) {
			return null;
	}
	return $this->Query;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Query $Query
* @return \Pimcore\Model\DataObject\Ecommerce\Query
*/
public function setQuery($Query)
{
	$this->Query = $Query;
	return $this;
}

}

