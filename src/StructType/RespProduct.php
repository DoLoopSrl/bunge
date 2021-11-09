<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespProduct StructType
 * @subpackage Structs
 */
class RespProduct extends AbstractStructBase
{
    /**
     * The activity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $activity;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $category;
    /**
     * The categoryDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $categoryDesc;
    /**
     * The company
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $company;
    /**
     * The lastUpdDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $lastUpdDate;
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
     * The productDescTranslated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $productDescTranslated;
    /**
     * Constructor method for RespProduct
     * @uses RespProduct::setActivity()
     * @uses RespProduct::setCategory()
     * @uses RespProduct::setCategoryDesc()
     * @uses RespProduct::setCompany()
     * @uses RespProduct::setLastUpdDate()
     * @uses RespProduct::setProduct()
     * @uses RespProduct::setProductDesc()
     * @uses RespProduct::setProductDescTranslated()
     * @param string $activity
     * @param string $category
     * @param string $categoryDesc
     * @param float $company
     * @param string $lastUpdDate
     * @param string $product
     * @param string $productDesc
     * @param string $productDescTranslated
     */
    public function __construct($activity = null, $category = null, $categoryDesc = null, $company = null, $lastUpdDate = null, $product = null, $productDesc = null, $productDescTranslated = null)
    {
        $this
            ->setActivity($activity)
            ->setCategory($category)
            ->setCategoryDesc($categoryDesc)
            ->setCompany($company)
            ->setLastUpdDate($lastUpdDate)
            ->setProduct($product)
            ->setProductDesc($productDesc)
            ->setProductDescTranslated($productDescTranslated);
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
     * @return \bunge\StructType\RespProduct
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
     * @return \bunge\StructType\RespProduct
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
     * Get categoryDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCategoryDesc()
    {
        return isset($this->categoryDesc) ? $this->categoryDesc : null;
    }
    /**
     * Set categoryDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $categoryDesc
     * @return \bunge\StructType\RespProduct
     */
    public function setCategoryDesc($categoryDesc = null)
    {
        // validation for constraint: string
        if (!is_null($categoryDesc) && !is_string($categoryDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryDesc, true), gettype($categoryDesc)), __LINE__);
        }
        if (is_null($categoryDesc) || (is_array($categoryDesc) && empty($categoryDesc))) {
            unset($this->categoryDesc);
        } else {
            $this->categoryDesc = $categoryDesc;
        }
        return $this;
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
     * @return \bunge\StructType\RespProduct
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
     * Get lastUpdDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastUpdDate()
    {
        return isset($this->lastUpdDate) ? $this->lastUpdDate : null;
    }
    /**
     * Set lastUpdDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastUpdDate
     * @return \bunge\StructType\RespProduct
     */
    public function setLastUpdDate($lastUpdDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdDate) && !is_string($lastUpdDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdDate, true), gettype($lastUpdDate)), __LINE__);
        }
        if (is_null($lastUpdDate) || (is_array($lastUpdDate) && empty($lastUpdDate))) {
            unset($this->lastUpdDate);
        } else {
            $this->lastUpdDate = $lastUpdDate;
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
     * @return \bunge\StructType\RespProduct
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
     * @return \bunge\StructType\RespProduct
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
     * Get productDescTranslated value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductDescTranslated()
    {
        return isset($this->productDescTranslated) ? $this->productDescTranslated : null;
    }
    /**
     * Set productDescTranslated value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productDescTranslated
     * @return \bunge\StructType\RespProduct
     */
    public function setProductDescTranslated($productDescTranslated = null)
    {
        // validation for constraint: string
        if (!is_null($productDescTranslated) && !is_string($productDescTranslated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productDescTranslated, true), gettype($productDescTranslated)), __LINE__);
        }
        if (is_null($productDescTranslated) || (is_array($productDescTranslated) && empty($productDescTranslated))) {
            unset($this->productDescTranslated);
        } else {
            $this->productDescTranslated = $productDescTranslated;
        }
        return $this;
    }
}
