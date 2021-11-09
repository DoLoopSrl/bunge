<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for queryProduct StructType
 * @subpackage Structs
 */
class QueryProduct extends AbstractStructBase
{
    /**
     * The company
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $company;
    /**
     * The product
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $product;
    /**
     * The productDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $productDesc;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $category;
    /**
     * The activity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $activity;
    /**
     * The fromRecordNumber
     * @var int
     */
    public $fromRecordNumber;
    /**
     * The toRecordNumber
     * @var int
     */
    public $toRecordNumber;
    /**
     * Constructor method for queryProduct
     * @uses QueryProduct::setCompany()
     * @uses QueryProduct::setProduct()
     * @uses QueryProduct::setProductDesc()
     * @uses QueryProduct::setCategory()
     * @uses QueryProduct::setActivity()
     * @uses QueryProduct::setFromRecordNumber()
     * @uses QueryProduct::setToRecordNumber()
     * @param float $company
     * @param string $product
     * @param string $productDesc
     * @param string $category
     * @param string $activity
     * @param int $fromRecordNumber
     * @param int $toRecordNumber
     */
    public function __construct($company = null, $product = null, $productDesc = null, $category = null, $activity = null, $fromRecordNumber = null, $toRecordNumber = null)
    {
        $this
            ->setCompany($company)
            ->setProduct($product)
            ->setProductDesc($productDesc)
            ->setCategory($category)
            ->setActivity($activity)
            ->setFromRecordNumber($fromRecordNumber)
            ->setToRecordNumber($toRecordNumber);
    }
    /**
     * Get company value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getCompany()
    {
        return isset($this->company) ? $this->company : null;
    }
    /**
     * Set company value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $company
     * @return \bunge\StructType\QueryProduct
     */
    public function setCompany($company = null)
    {
        // validation for constraint: float
        if (!is_null($company) && !(is_float($company) || is_numeric($company))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        if (is_null($company) || (is_array($company) && empty($company))) {
            unset($this->company);
        } else {
            $this->company = $company;
        }
        return $this;
    }
    /**
     * Get product value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProduct()
    {
        return isset($this->product) ? $this->product : null;
    }
    /**
     * Set product value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $product
     * @return \bunge\StructType\QueryProduct
     */
    public function setProduct($product = null)
    {
        // validation for constraint: string
        if (!is_null($product) && !is_string($product)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($product, true), gettype($product)), __LINE__);
        }
        if (is_null($product) || (is_array($product) && empty($product))) {
            unset($this->product);
        } else {
            $this->product = $product;
        }
        return $this;
    }
    /**
     * Get productDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductDesc()
    {
        return isset($this->productDesc) ? $this->productDesc : null;
    }
    /**
     * Set productDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productDesc
     * @return \bunge\StructType\QueryProduct
     */
    public function setProductDesc($productDesc = null)
    {
        // validation for constraint: string
        if (!is_null($productDesc) && !is_string($productDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productDesc, true), gettype($productDesc)), __LINE__);
        }
        if (is_null($productDesc) || (is_array($productDesc) && empty($productDesc))) {
            unset($this->productDesc);
        } else {
            $this->productDesc = $productDesc;
        }
        return $this;
    }
    /**
     * Get category value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCategory()
    {
        return isset($this->category) ? $this->category : null;
    }
    /**
     * Set category value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $category
     * @return \bunge\StructType\QueryProduct
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        if (is_null($category) || (is_array($category) && empty($category))) {
            unset($this->category);
        } else {
            $this->category = $category;
        }
        return $this;
    }
    /**
     * Get activity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getActivity()
    {
        return isset($this->activity) ? $this->activity : null;
    }
    /**
     * Set activity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $activity
     * @return \bunge\StructType\QueryProduct
     */
    public function setActivity($activity = null)
    {
        // validation for constraint: string
        if (!is_null($activity) && !is_string($activity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activity, true), gettype($activity)), __LINE__);
        }
        if (is_null($activity) || (is_array($activity) && empty($activity))) {
            unset($this->activity);
        } else {
            $this->activity = $activity;
        }
        return $this;
    }
    /**
     * Get fromRecordNumber value
     * @return int|null
     */
    public function getFromRecordNumber()
    {
        return $this->fromRecordNumber;
    }
    /**
     * Set fromRecordNumber value
     * @param int $fromRecordNumber
     * @return \bunge\StructType\QueryProduct
     */
    public function setFromRecordNumber($fromRecordNumber = null)
    {
        // validation for constraint: int
        if (!is_null($fromRecordNumber) && !(is_int($fromRecordNumber) || ctype_digit($fromRecordNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fromRecordNumber, true), gettype($fromRecordNumber)), __LINE__);
        }
        $this->fromRecordNumber = $fromRecordNumber;
        return $this;
    }
    /**
     * Get toRecordNumber value
     * @return int|null
     */
    public function getToRecordNumber()
    {
        return $this->toRecordNumber;
    }
    /**
     * Set toRecordNumber value
     * @param int $toRecordNumber
     * @return \bunge\StructType\QueryProduct
     */
    public function setToRecordNumber($toRecordNumber = null)
    {
        // validation for constraint: int
        if (!is_null($toRecordNumber) && !(is_int($toRecordNumber) || ctype_digit($toRecordNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($toRecordNumber, true), gettype($toRecordNumber)), __LINE__);
        }
        $this->toRecordNumber = $toRecordNumber;
        return $this;
    }
}
