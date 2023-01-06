<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - Mens [classificationstore]
 * - Women [classificationstore]
 * - Kids [classificationstore]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\ECOMMERCE\Listing getList(array $config = [])
*/

class ECOMMERCE extends Concrete
{
protected $o_classId = "2";
protected $o_className = "ECOMMERCE";
protected $Mens;
protected $Women;
protected $Kids;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\ECOMMERCE
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Mens - Mens
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getMens(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Mens");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Mens")->preGetData($this);

	return $data;
}

/**
* Set Mens - Mens
* @param \Pimcore\Model\DataObject\Classificationstore|null $Mens
* @return \Pimcore\Model\DataObject\ECOMMERCE
*/
public function setMens(?\Pimcore\Model\DataObject\Classificationstore $Mens)
{
	$this->Mens = $Mens;

	return $this;
}

/**
* Get Women - Women
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getWomen(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Women");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Women")->preGetData($this);

	return $data;
}

/**
* Set Women - Women
* @param \Pimcore\Model\DataObject\Classificationstore|null $Women
* @return \Pimcore\Model\DataObject\ECOMMERCE
*/
public function setWomen(?\Pimcore\Model\DataObject\Classificationstore $Women)
{
	$this->Women = $Women;

	return $this;
}

/**
* Get Kids - Kids
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getKids(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Kids");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Kids")->preGetData($this);

	return $data;
}

/**
* Set Kids - Kids
* @param \Pimcore\Model\DataObject\Classificationstore|null $Kids
* @return \Pimcore\Model\DataObject\ECOMMERCE
*/
public function setKids(?\Pimcore\Model\DataObject\Classificationstore $Kids)
{
	$this->Kids = $Kids;

	return $this;
}

}

