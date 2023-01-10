<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - elSKU [input]
 * - electronics [classificationstore]
 * - warranty [numeric]
 * - madeIn [country]
 * - Beauty [classificationstore]
 * - ManufacturingDate [date]
 * - ExpiryDate [date]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\ECommerce\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByElSKU($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByWarranty($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByMadeIn($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByManufacturingDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ECommerce\Listing|\Pimcore\Model\DataObject\ECommerce|null getByExpiryDate($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class ECommerce extends Concrete
{
protected $o_classId = "1";
protected $o_className = "ECommerce";
protected $elSKU;
protected $electronics;
protected $warranty;
protected $madeIn;
protected $Beauty;
protected $ManufacturingDate;
protected $ExpiryDate;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\ECommerce
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get elSKU - El S K U
* @return string|null
*/
public function getElSKU(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("elSKU");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->elSKU;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set elSKU - El S K U
* @param string|null $elSKU
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setElSKU(?string $elSKU)
{
	$this->elSKU = $elSKU;

	return $this;
}

/**
* Get electronics - Electronics
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getElectronics(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("electronics");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("electronics")->preGetData($this);

	return $data;
}

/**
* Set electronics - Electronics
* @param \Pimcore\Model\DataObject\Classificationstore|null $electronics
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setElectronics(?\Pimcore\Model\DataObject\Classificationstore $electronics)
{
	$this->electronics = $electronics;

	return $this;
}

/**
* Get warranty - Warranty
* @return float|null
*/
public function getWarranty(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("warranty");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->warranty;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set warranty - Warranty
* @param float|null $warranty
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setWarranty(?float $warranty)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("warranty");
	$this->warranty = $fd->preSetData($this, $warranty);
	return $this;
}

/**
* Get madeIn - Made In
* @return string|null
*/
public function getMadeIn(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("madeIn");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->madeIn;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set madeIn - Made In
* @param string|null $madeIn
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setMadeIn(?string $madeIn)
{
	$this->madeIn = $madeIn;

	return $this;
}

/**
* Get Beauty - Beauty
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getBeauty(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Beauty");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Beauty")->preGetData($this);

	return $data;
}

/**
* Set Beauty - Beauty
* @param \Pimcore\Model\DataObject\Classificationstore|null $Beauty
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setBeauty(?\Pimcore\Model\DataObject\Classificationstore $Beauty)
{
	$this->Beauty = $Beauty;

	return $this;
}

/**
* Get ManufacturingDate - Manufacturing Date
* @return \Carbon\Carbon|null
*/
public function getManufacturingDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ManufacturingDate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ManufacturingDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ManufacturingDate - Manufacturing Date
* @param \Carbon\Carbon|null $ManufacturingDate
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setManufacturingDate(?\Carbon\Carbon $ManufacturingDate)
{
	$this->ManufacturingDate = $ManufacturingDate;

	return $this;
}

/**
* Get ExpiryDate - Expiry Date
* @return \Carbon\Carbon|null
*/
public function getExpiryDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ExpiryDate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ExpiryDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ExpiryDate - Expiry Date
* @param \Carbon\Carbon|null $ExpiryDate
* @return \Pimcore\Model\DataObject\ECommerce
*/
public function setExpiryDate(?\Carbon\Carbon $ExpiryDate)
{
	$this->ExpiryDate = $ExpiryDate;

	return $this;
}

}

