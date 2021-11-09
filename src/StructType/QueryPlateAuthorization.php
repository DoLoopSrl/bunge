<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for queryPlateAuthorization StructType
 * @subpackage Structs
 */
class QueryPlateAuthorization extends AbstractStructBase
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
     * The idAuth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $idAuth;
    /**
     * The location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $location;
    /**
     * The third
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $third;
    /**
     * The thirdName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $thirdName;
    /**
     * The dateFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dateFrom;
    /**
     * The dateTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dateTo;
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
     * The plate1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $plate1;
    /**
     * The plate2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $plate2;
    /**
     * The authType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $authType;
    /**
     * The act
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $act;
    /**
     * The swtActive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $swtActive;
    /**
     * The swtInfoOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $swtInfoOrder;
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
     * Constructor method for queryPlateAuthorization
     * @uses QueryPlateAuthorization::setCompany()
     * @uses QueryPlateAuthorization::setIdAuth()
     * @uses QueryPlateAuthorization::setLocation()
     * @uses QueryPlateAuthorization::setThird()
     * @uses QueryPlateAuthorization::setThirdName()
     * @uses QueryPlateAuthorization::setDateFrom()
     * @uses QueryPlateAuthorization::setDateTo()
     * @uses QueryPlateAuthorization::setProduct()
     * @uses QueryPlateAuthorization::setProductDesc()
     * @uses QueryPlateAuthorization::setPlate1()
     * @uses QueryPlateAuthorization::setPlate2()
     * @uses QueryPlateAuthorization::setAuthType()
     * @uses QueryPlateAuthorization::setAct()
     * @uses QueryPlateAuthorization::setSwtActive()
     * @uses QueryPlateAuthorization::setSwtInfoOrder()
     * @uses QueryPlateAuthorization::setFromRecordNumber()
     * @uses QueryPlateAuthorization::setToRecordNumber()
     * @param float $company
     * @param float $idAuth
     * @param string $location
     * @param string $third
     * @param string $thirdName
     * @param string $dateFrom
     * @param string $dateTo
     * @param string $product
     * @param string $productDesc
     * @param string $plate1
     * @param string $plate2
     * @param string $authType
     * @param string $act
     * @param string $swtActive
     * @param string $swtInfoOrder
     * @param int $fromRecordNumber
     * @param int $toRecordNumber
     */
    public function __construct($company = null, $idAuth = null, $location = null, $third = null, $thirdName = null, $dateFrom = null, $dateTo = null, $product = null, $productDesc = null, $plate1 = null, $plate2 = null, $authType = null, $act = null, $swtActive = null, $swtInfoOrder = null, $fromRecordNumber = null, $toRecordNumber = null)
    {
        $this
            ->setCompany($company)
            ->setIdAuth($idAuth)
            ->setLocation($location)
            ->setThird($third)
            ->setThirdName($thirdName)
            ->setDateFrom($dateFrom)
            ->setDateTo($dateTo)
            ->setProduct($product)
            ->setProductDesc($productDesc)
            ->setPlate1($plate1)
            ->setPlate2($plate2)
            ->setAuthType($authType)
            ->setAct($act)
            ->setSwtActive($swtActive)
            ->setSwtInfoOrder($swtInfoOrder)
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
     * @return \bunge\StructType\QueryPlateAuthorization
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
     * Get idAuth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getIdAuth()
    {
        return isset($this->idAuth) ? $this->idAuth : null;
    }
    /**
     * Set idAuth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $idAuth
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setIdAuth($idAuth = null)
    {
        // validation for constraint: float
        if (!is_null($idAuth) && !(is_float($idAuth) || is_numeric($idAuth))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($idAuth, true), gettype($idAuth)), __LINE__);
        }
        if (is_null($idAuth) || (is_array($idAuth) && empty($idAuth))) {
            unset($this->idAuth);
        } else {
            $this->idAuth = $idAuth;
        }
        return $this;
    }
    /**
     * Get location value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocation()
    {
        return isset($this->location) ? $this->location : null;
    }
    /**
     * Set location value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $location
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        if (is_null($location) || (is_array($location) && empty($location))) {
            unset($this->location);
        } else {
            $this->location = $location;
        }
        return $this;
    }
    /**
     * Get third value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThird()
    {
        return isset($this->third) ? $this->third : null;
    }
    /**
     * Set third value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $third
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setThird($third = null)
    {
        // validation for constraint: string
        if (!is_null($third) && !is_string($third)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($third, true), gettype($third)), __LINE__);
        }
        if (is_null($third) || (is_array($third) && empty($third))) {
            unset($this->third);
        } else {
            $this->third = $third;
        }
        return $this;
    }
    /**
     * Get thirdName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThirdName()
    {
        return isset($this->thirdName) ? $this->thirdName : null;
    }
    /**
     * Set thirdName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $thirdName
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setThirdName($thirdName = null)
    {
        // validation for constraint: string
        if (!is_null($thirdName) && !is_string($thirdName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thirdName, true), gettype($thirdName)), __LINE__);
        }
        if (is_null($thirdName) || (is_array($thirdName) && empty($thirdName))) {
            unset($this->thirdName);
        } else {
            $this->thirdName = $thirdName;
        }
        return $this;
    }
    /**
     * Get dateFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateFrom()
    {
        return isset($this->dateFrom) ? $this->dateFrom : null;
    }
    /**
     * Set dateFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateFrom
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setDateFrom($dateFrom = null)
    {
        // validation for constraint: string
        if (!is_null($dateFrom) && !is_string($dateFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFrom, true), gettype($dateFrom)), __LINE__);
        }
        if (is_null($dateFrom) || (is_array($dateFrom) && empty($dateFrom))) {
            unset($this->dateFrom);
        } else {
            $this->dateFrom = $dateFrom;
        }
        return $this;
    }
    /**
     * Get dateTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateTo()
    {
        return isset($this->dateTo) ? $this->dateTo : null;
    }
    /**
     * Set dateTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateTo
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setDateTo($dateTo = null)
    {
        // validation for constraint: string
        if (!is_null($dateTo) && !is_string($dateTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTo, true), gettype($dateTo)), __LINE__);
        }
        if (is_null($dateTo) || (is_array($dateTo) && empty($dateTo))) {
            unset($this->dateTo);
        } else {
            $this->dateTo = $dateTo;
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
     * @return \bunge\StructType\QueryPlateAuthorization
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
     * @return \bunge\StructType\QueryPlateAuthorization
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
     * Get plate1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlate1()
    {
        return isset($this->plate1) ? $this->plate1 : null;
    }
    /**
     * Set plate1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $plate1
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setPlate1($plate1 = null)
    {
        // validation for constraint: string
        if (!is_null($plate1) && !is_string($plate1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plate1, true), gettype($plate1)), __LINE__);
        }
        if (is_null($plate1) || (is_array($plate1) && empty($plate1))) {
            unset($this->plate1);
        } else {
            $this->plate1 = $plate1;
        }
        return $this;
    }
    /**
     * Get plate2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlate2()
    {
        return isset($this->plate2) ? $this->plate2 : null;
    }
    /**
     * Set plate2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $plate2
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setPlate2($plate2 = null)
    {
        // validation for constraint: string
        if (!is_null($plate2) && !is_string($plate2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plate2, true), gettype($plate2)), __LINE__);
        }
        if (is_null($plate2) || (is_array($plate2) && empty($plate2))) {
            unset($this->plate2);
        } else {
            $this->plate2 = $plate2;
        }
        return $this;
    }
    /**
     * Get authType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthType()
    {
        return isset($this->authType) ? $this->authType : null;
    }
    /**
     * Set authType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authType
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setAuthType($authType = null)
    {
        // validation for constraint: string
        if (!is_null($authType) && !is_string($authType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authType, true), gettype($authType)), __LINE__);
        }
        if (is_null($authType) || (is_array($authType) && empty($authType))) {
            unset($this->authType);
        } else {
            $this->authType = $authType;
        }
        return $this;
    }
    /**
     * Get act value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAct()
    {
        return isset($this->act) ? $this->act : null;
    }
    /**
     * Set act value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $act
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setAct($act = null)
    {
        // validation for constraint: string
        if (!is_null($act) && !is_string($act)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($act, true), gettype($act)), __LINE__);
        }
        if (is_null($act) || (is_array($act) && empty($act))) {
            unset($this->act);
        } else {
            $this->act = $act;
        }
        return $this;
    }
    /**
     * Get swtActive value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSwtActive()
    {
        return isset($this->swtActive) ? $this->swtActive : null;
    }
    /**
     * Set swtActive value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $swtActive
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setSwtActive($swtActive = null)
    {
        // validation for constraint: string
        if (!is_null($swtActive) && !is_string($swtActive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swtActive, true), gettype($swtActive)), __LINE__);
        }
        if (is_null($swtActive) || (is_array($swtActive) && empty($swtActive))) {
            unset($this->swtActive);
        } else {
            $this->swtActive = $swtActive;
        }
        return $this;
    }
    /**
     * Get swtInfoOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSwtInfoOrder()
    {
        return isset($this->swtInfoOrder) ? $this->swtInfoOrder : null;
    }
    /**
     * Set swtInfoOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $swtInfoOrder
     * @return \bunge\StructType\QueryPlateAuthorization
     */
    public function setSwtInfoOrder($swtInfoOrder = null)
    {
        // validation for constraint: string
        if (!is_null($swtInfoOrder) && !is_string($swtInfoOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swtInfoOrder, true), gettype($swtInfoOrder)), __LINE__);
        }
        if (is_null($swtInfoOrder) || (is_array($swtInfoOrder) && empty($swtInfoOrder))) {
            unset($this->swtInfoOrder);
        } else {
            $this->swtInfoOrder = $swtInfoOrder;
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
     * @return \bunge\StructType\QueryPlateAuthorization
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
     * @return \bunge\StructType\QueryPlateAuthorization
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
