<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - name [input]
 * - comments [textarea]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Feedback\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback|null getByName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback|null getByComments($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Feedback extends Concrete
{
protected $o_classId = "6";
protected $o_className = "feedback";
protected $name;
protected $comments;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Feedback
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string|null
*/
public function getName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set name - Name
* @param string|null $name
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setName(?string $name)
{
	$this->name = $name;

	return $this;
}

/**
* Get comments - Comments
* @return string|null
*/
public function getComments(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("comments");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->comments;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set comments - Comments
* @param string|null $comments
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setComments(?string $comments)
{
	$this->comments = $comments;

	return $this;
}

}

