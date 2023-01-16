<?php

/**
 * Fields Summary:
 * - Question [input]
 * - Answer [textarea]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Query extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Query";
protected $Question;
protected $Answer;


/**
* Query constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get Question - Question 
* @return string|null
*/
public function getQuestion(): ?string
{
	$data = $this->Question;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Question")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Question");
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
* Set Question - Question 
* @param string|null $Question
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Query
*/
public function setQuestion (?string $Question)
{
	$this->Question = $Question;

	return $this;
}

/**
* Get Answer - Answer
* @return string|null
*/
public function getAnswer(): ?string
{
	$data = $this->Answer;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Answer")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Answer");
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
* Set Answer - Answer
* @param string|null $Answer
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Query
*/
public function setAnswer (?string $Answer)
{
	$this->Answer = $Answer;

	return $this;
}

}

