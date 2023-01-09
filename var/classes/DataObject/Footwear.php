<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - Gender [select]
 * - footwear_shop [classificationstore]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Footwear\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByGender($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Footwear extends Concrete
{
protected $o_classId = "1";
protected $o_className = "Footwear";
protected $Gender;
protected $footwear_shop;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Footwear
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Gender - Gender
* @return string|null
*/
public function getGender(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Gender");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Gender;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Gender - Gender
* @param string|null $Gender
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setGender(?string $Gender)
{
	$this->Gender = $Gender;

	return $this;
}

/**
* Get footwear_shop - Footwear _shop
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getFootwear_shop(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("footwear_shop");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("footwear_shop")->preGetData($this);

	return $data;
}

/**
* Set footwear_shop - Footwear _shop
* @param \Pimcore\Model\DataObject\Classificationstore|null $footwear_shop
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setFootwear_shop(?\Pimcore\Model\DataObject\Classificationstore $footwear_shop)
{
	$this->footwear_shop = $footwear_shop;

	return $this;
}

}

