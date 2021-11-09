<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for insertPlateAuthorization StructType
 * @subpackage Structs
 */
class InsertPlateAuthorization extends AbstractStructBase
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
     * The thirdVat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $thirdVat;
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
     * The quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $quantity;
    /**
     * The um
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $um;
    /**
     * The carrier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \bunge\StructType\RespPlateAuthTransporter
     */
    public $carrier;
    /**
     * The agency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \bunge\StructType\RespPlateAuthTransporter
     */
    public $agency;
    /**
     * The plate1Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $plate1Country;
    /**
     * The plate1CountryDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $plate1CountryDesc;
    /**
     * The plate1MeanOfTransport
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $plate1MeanOfTransport;
    /**
     * The plate1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $plate1;
    /**
     * The plate2Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $plate2Country;
    /**
     * The plate2CountryDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $plate2CountryDesc;
    /**
     * The plate2MeanOfTransport
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $plate2MeanOfTransport;
    /**
     * The plate2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $plate2;
    /**
     * The rfrContractThird
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $rfrContractThird;
    /**
     * The rfrOrderThird
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $rfrOrderThird;
    /**
     * The destinationAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $destinationAddress;
    /**
     * The contactPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $contactPhone;
    /**
     * The destinationTimetable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $destinationTimetable;
    /**
     * The awardeeName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $awardeeName;
    /**
     * The awardeeAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $awardeeAddress;
    /**
     * The awardeeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $awardeeCode;
    /**
     * The awardeeCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $awardeeCountry;
    /**
     * The awardeeCountryDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $awardeeCountryDesc;
    /**
     * The awardeeProvince
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $awardeeProvince;
    /**
     * The awardeeProvinceDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $awardeeProvinceDesc;
    /**
     * The awardeeCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $awardeeCity;
    /**
     * The obs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $obs;
    /**
     * The obsWaybillNote
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $obsWaybillNote;
    /**
     * The flexiTare
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $flexiTare;
    /**
     * The flexiContainer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $flexiContainer;
    /**
     * The flexiBookNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $flexiBookNumber;
    /**
     * The tankType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $tankType;
    /**
     * The swtCallOff
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $swtCallOff;
    /**
     * The driverId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $driverId;
    /**
     * The driverIdCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $driverIdCountry;
    /**
     * The driverIdCountryDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $driverIdCountryDesc;
    /**
     * The driverName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $driverName;
    /**
     * The swtSample
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $swtSample;
    /**
     * The priceTransport
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $priceTransport;
    /**
     * The currencyPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $currencyPrice;
    /**
     * The umPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $umPrice;
    /**
     * The act
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $act;
    /**
     * The listContracts
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \bunge\StructType\RespPlateAuthContract[]
     */
    public $listContracts;
    /**
     * The listStockTransferOrders
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \bunge\StructType\RespPlateAuthStockTransferOrder[]
     */
    public $listStockTransferOrders;
    /**
     * The authType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $authType;
    /**
     * The whoContractsTransport
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $whoContractsTransport;
    /**
     * Constructor method for insertPlateAuthorization
     * @uses InsertPlateAuthorization::setCompany()
     * @uses InsertPlateAuthorization::setLocation()
     * @uses InsertPlateAuthorization::setThird()
     * @uses InsertPlateAuthorization::setThirdVat()
     * @uses InsertPlateAuthorization::setThirdName()
     * @uses InsertPlateAuthorization::setDateFrom()
     * @uses InsertPlateAuthorization::setDateTo()
     * @uses InsertPlateAuthorization::setProduct()
     * @uses InsertPlateAuthorization::setProductDesc()
     * @uses InsertPlateAuthorization::setQuantity()
     * @uses InsertPlateAuthorization::setUm()
     * @uses InsertPlateAuthorization::setCarrier()
     * @uses InsertPlateAuthorization::setAgency()
     * @uses InsertPlateAuthorization::setPlate1Country()
     * @uses InsertPlateAuthorization::setPlate1CountryDesc()
     * @uses InsertPlateAuthorization::setPlate1MeanOfTransport()
     * @uses InsertPlateAuthorization::setPlate1()
     * @uses InsertPlateAuthorization::setPlate2Country()
     * @uses InsertPlateAuthorization::setPlate2CountryDesc()
     * @uses InsertPlateAuthorization::setPlate2MeanOfTransport()
     * @uses InsertPlateAuthorization::setPlate2()
     * @uses InsertPlateAuthorization::setRfrContractThird()
     * @uses InsertPlateAuthorization::setRfrOrderThird()
     * @uses InsertPlateAuthorization::setDestinationAddress()
     * @uses InsertPlateAuthorization::setContactPhone()
     * @uses InsertPlateAuthorization::setDestinationTimetable()
     * @uses InsertPlateAuthorization::setAwardeeName()
     * @uses InsertPlateAuthorization::setAwardeeAddress()
     * @uses InsertPlateAuthorization::setAwardeeCode()
     * @uses InsertPlateAuthorization::setAwardeeCountry()
     * @uses InsertPlateAuthorization::setAwardeeCountryDesc()
     * @uses InsertPlateAuthorization::setAwardeeProvince()
     * @uses InsertPlateAuthorization::setAwardeeProvinceDesc()
     * @uses InsertPlateAuthorization::setAwardeeCity()
     * @uses InsertPlateAuthorization::setObs()
     * @uses InsertPlateAuthorization::setObsWaybillNote()
     * @uses InsertPlateAuthorization::setFlexiTare()
     * @uses InsertPlateAuthorization::setFlexiContainer()
     * @uses InsertPlateAuthorization::setFlexiBookNumber()
     * @uses InsertPlateAuthorization::setTankType()
     * @uses InsertPlateAuthorization::setSwtCallOff()
     * @uses InsertPlateAuthorization::setDriverId()
     * @uses InsertPlateAuthorization::setDriverIdCountry()
     * @uses InsertPlateAuthorization::setDriverIdCountryDesc()
     * @uses InsertPlateAuthorization::setDriverName()
     * @uses InsertPlateAuthorization::setSwtSample()
     * @uses InsertPlateAuthorization::setPriceTransport()
     * @uses InsertPlateAuthorization::setCurrencyPrice()
     * @uses InsertPlateAuthorization::setUmPrice()
     * @uses InsertPlateAuthorization::setAct()
     * @uses InsertPlateAuthorization::setListContracts()
     * @uses InsertPlateAuthorization::setListStockTransferOrders()
     * @uses InsertPlateAuthorization::setAuthType()
     * @uses InsertPlateAuthorization::setWhoContractsTransport()
     * @param float $company
     * @param string $location
     * @param string $third
     * @param string $thirdVat
     * @param string $thirdName
     * @param string $dateFrom
     * @param string $dateTo
     * @param string $product
     * @param string $productDesc
     * @param float $quantity
     * @param string $um
     * @param \bunge\StructType\RespPlateAuthTransporter $carrier
     * @param \bunge\StructType\RespPlateAuthTransporter $agency
     * @param string $plate1Country
     * @param string $plate1CountryDesc
     * @param string $plate1MeanOfTransport
     * @param string $plate1
     * @param string $plate2Country
     * @param string $plate2CountryDesc
     * @param string $plate2MeanOfTransport
     * @param string $plate2
     * @param string $rfrContractThird
     * @param string $rfrOrderThird
     * @param string $destinationAddress
     * @param string $contactPhone
     * @param string $destinationTimetable
     * @param string $awardeeName
     * @param string $awardeeAddress
     * @param string $awardeeCode
     * @param string $awardeeCountry
     * @param string $awardeeCountryDesc
     * @param string $awardeeProvince
     * @param string $awardeeProvinceDesc
     * @param string $awardeeCity
     * @param string $obs
     * @param string $obsWaybillNote
     * @param float $flexiTare
     * @param string $flexiContainer
     * @param string $flexiBookNumber
     * @param string $tankType
     * @param string $swtCallOff
     * @param string $driverId
     * @param string $driverIdCountry
     * @param string $driverIdCountryDesc
     * @param string $driverName
     * @param string $swtSample
     * @param float $priceTransport
     * @param string $currencyPrice
     * @param string $umPrice
     * @param string $act
     * @param \bunge\StructType\RespPlateAuthContract[] $listContracts
     * @param \bunge\StructType\RespPlateAuthStockTransferOrder[] $listStockTransferOrders
     * @param string $authType
     * @param string $whoContractsTransport
     */
    public function __construct($company = null, $location = null, $third = null, $thirdVat = null, $thirdName = null, $dateFrom = null, $dateTo = null, $product = null, $productDesc = null, $quantity = null, $um = null, \bunge\StructType\RespPlateAuthTransporter $carrier = null, \bunge\StructType\RespPlateAuthTransporter $agency = null, $plate1Country = null, $plate1CountryDesc = null, $plate1MeanOfTransport = null, $plate1 = null, $plate2Country = null, $plate2CountryDesc = null, $plate2MeanOfTransport = null, $plate2 = null, $rfrContractThird = null, $rfrOrderThird = null, $destinationAddress = null, $contactPhone = null, $destinationTimetable = null, $awardeeName = null, $awardeeAddress = null, $awardeeCode = null, $awardeeCountry = null, $awardeeCountryDesc = null, $awardeeProvince = null, $awardeeProvinceDesc = null, $awardeeCity = null, $obs = null, $obsWaybillNote = null, $flexiTare = null, $flexiContainer = null, $flexiBookNumber = null, $tankType = null, $swtCallOff = null, $driverId = null, $driverIdCountry = null, $driverIdCountryDesc = null, $driverName = null, $swtSample = null, $priceTransport = null, $currencyPrice = null, $umPrice = null, $act = null, array $listContracts = array(), array $listStockTransferOrders = array(), $authType = null, $whoContractsTransport = null)
    {
        $this
            ->setCompany($company)
            ->setLocation($location)
            ->setThird($third)
            ->setThirdVat($thirdVat)
            ->setThirdName($thirdName)
            ->setDateFrom($dateFrom)
            ->setDateTo($dateTo)
            ->setProduct($product)
            ->setProductDesc($productDesc)
            ->setQuantity($quantity)
            ->setUm($um)
            ->setCarrier($carrier)
            ->setAgency($agency)
            ->setPlate1Country($plate1Country)
            ->setPlate1CountryDesc($plate1CountryDesc)
            ->setPlate1MeanOfTransport($plate1MeanOfTransport)
            ->setPlate1($plate1)
            ->setPlate2Country($plate2Country)
            ->setPlate2CountryDesc($plate2CountryDesc)
            ->setPlate2MeanOfTransport($plate2MeanOfTransport)
            ->setPlate2($plate2)
            ->setRfrContractThird($rfrContractThird)
            ->setRfrOrderThird($rfrOrderThird)
            ->setDestinationAddress($destinationAddress)
            ->setContactPhone($contactPhone)
            ->setDestinationTimetable($destinationTimetable)
            ->setAwardeeName($awardeeName)
            ->setAwardeeAddress($awardeeAddress)
            ->setAwardeeCode($awardeeCode)
            ->setAwardeeCountry($awardeeCountry)
            ->setAwardeeCountryDesc($awardeeCountryDesc)
            ->setAwardeeProvince($awardeeProvince)
            ->setAwardeeProvinceDesc($awardeeProvinceDesc)
            ->setAwardeeCity($awardeeCity)
            ->setObs($obs)
            ->setObsWaybillNote($obsWaybillNote)
            ->setFlexiTare($flexiTare)
            ->setFlexiContainer($flexiContainer)
            ->setFlexiBookNumber($flexiBookNumber)
            ->setTankType($tankType)
            ->setSwtCallOff($swtCallOff)
            ->setDriverId($driverId)
            ->setDriverIdCountry($driverIdCountry)
            ->setDriverIdCountryDesc($driverIdCountryDesc)
            ->setDriverName($driverName)
            ->setSwtSample($swtSample)
            ->setPriceTransport($priceTransport)
            ->setCurrencyPrice($currencyPrice)
            ->setUmPrice($umPrice)
            ->setAct($act)
            ->setListContracts($listContracts)
            ->setListStockTransferOrders($listStockTransferOrders)
            ->setAuthType($authType)
            ->setWhoContractsTransport($whoContractsTransport);
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * Get thirdVat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThirdVat()
    {
        return isset($this->thirdVat) ? $this->thirdVat : null;
    }
    /**
     * Set thirdVat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $thirdVat
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setThirdVat($thirdVat = null)
    {
        // validation for constraint: string
        if (!is_null($thirdVat) && !is_string($thirdVat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thirdVat, true), gettype($thirdVat)), __LINE__);
        }
        if (is_null($thirdVat) || (is_array($thirdVat) && empty($thirdVat))) {
            unset($this->thirdVat);
        } else {
            $this->thirdVat = $thirdVat;
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * Get quantity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getQuantity()
    {
        return isset($this->quantity) ? $this->quantity : null;
    }
    /**
     * Set quantity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $quantity
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: float
        if (!is_null($quantity) && !(is_float($quantity) || is_numeric($quantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        if (is_null($quantity) || (is_array($quantity) && empty($quantity))) {
            unset($this->quantity);
        } else {
            $this->quantity = $quantity;
        }
        return $this;
    }
    /**
     * Get um value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUm()
    {
        return isset($this->um) ? $this->um : null;
    }
    /**
     * Set um value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $um
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setUm($um = null)
    {
        // validation for constraint: string
        if (!is_null($um) && !is_string($um)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($um, true), gettype($um)), __LINE__);
        }
        if (is_null($um) || (is_array($um) && empty($um))) {
            unset($this->um);
        } else {
            $this->um = $um;
        }
        return $this;
    }
    /**
     * Get carrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \bunge\StructType\RespPlateAuthTransporter|null
     */
    public function getCarrier()
    {
        return isset($this->carrier) ? $this->carrier : null;
    }
    /**
     * Set carrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \bunge\StructType\RespPlateAuthTransporter $carrier
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setCarrier(\bunge\StructType\RespPlateAuthTransporter $carrier = null)
    {
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->carrier);
        } else {
            $this->carrier = $carrier;
        }
        return $this;
    }
    /**
     * Get agency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \bunge\StructType\RespPlateAuthTransporter|null
     */
    public function getAgency()
    {
        return isset($this->agency) ? $this->agency : null;
    }
    /**
     * Set agency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \bunge\StructType\RespPlateAuthTransporter $agency
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setAgency(\bunge\StructType\RespPlateAuthTransporter $agency = null)
    {
        if (is_null($agency) || (is_array($agency) && empty($agency))) {
            unset($this->agency);
        } else {
            $this->agency = $agency;
        }
        return $this;
    }
    /**
     * Get plate1Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlate1Country()
    {
        return isset($this->plate1Country) ? $this->plate1Country : null;
    }
    /**
     * Set plate1Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $plate1Country
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setPlate1Country($plate1Country = null)
    {
        // validation for constraint: string
        if (!is_null($plate1Country) && !is_string($plate1Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plate1Country, true), gettype($plate1Country)), __LINE__);
        }
        if (is_null($plate1Country) || (is_array($plate1Country) && empty($plate1Country))) {
            unset($this->plate1Country);
        } else {
            $this->plate1Country = $plate1Country;
        }
        return $this;
    }
    /**
     * Get plate1CountryDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlate1CountryDesc()
    {
        return isset($this->plate1CountryDesc) ? $this->plate1CountryDesc : null;
    }
    /**
     * Set plate1CountryDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $plate1CountryDesc
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setPlate1CountryDesc($plate1CountryDesc = null)
    {
        // validation for constraint: string
        if (!is_null($plate1CountryDesc) && !is_string($plate1CountryDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plate1CountryDesc, true), gettype($plate1CountryDesc)), __LINE__);
        }
        if (is_null($plate1CountryDesc) || (is_array($plate1CountryDesc) && empty($plate1CountryDesc))) {
            unset($this->plate1CountryDesc);
        } else {
            $this->plate1CountryDesc = $plate1CountryDesc;
        }
        return $this;
    }
    /**
     * Get plate1MeanOfTransport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlate1MeanOfTransport()
    {
        return isset($this->plate1MeanOfTransport) ? $this->plate1MeanOfTransport : null;
    }
    /**
     * Set plate1MeanOfTransport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $plate1MeanOfTransport
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setPlate1MeanOfTransport($plate1MeanOfTransport = null)
    {
        // validation for constraint: string
        if (!is_null($plate1MeanOfTransport) && !is_string($plate1MeanOfTransport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plate1MeanOfTransport, true), gettype($plate1MeanOfTransport)), __LINE__);
        }
        if (is_null($plate1MeanOfTransport) || (is_array($plate1MeanOfTransport) && empty($plate1MeanOfTransport))) {
            unset($this->plate1MeanOfTransport);
        } else {
            $this->plate1MeanOfTransport = $plate1MeanOfTransport;
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * Get plate2Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlate2Country()
    {
        return isset($this->plate2Country) ? $this->plate2Country : null;
    }
    /**
     * Set plate2Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $plate2Country
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setPlate2Country($plate2Country = null)
    {
        // validation for constraint: string
        if (!is_null($plate2Country) && !is_string($plate2Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plate2Country, true), gettype($plate2Country)), __LINE__);
        }
        if (is_null($plate2Country) || (is_array($plate2Country) && empty($plate2Country))) {
            unset($this->plate2Country);
        } else {
            $this->plate2Country = $plate2Country;
        }
        return $this;
    }
    /**
     * Get plate2CountryDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlate2CountryDesc()
    {
        return isset($this->plate2CountryDesc) ? $this->plate2CountryDesc : null;
    }
    /**
     * Set plate2CountryDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $plate2CountryDesc
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setPlate2CountryDesc($plate2CountryDesc = null)
    {
        // validation for constraint: string
        if (!is_null($plate2CountryDesc) && !is_string($plate2CountryDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plate2CountryDesc, true), gettype($plate2CountryDesc)), __LINE__);
        }
        if (is_null($plate2CountryDesc) || (is_array($plate2CountryDesc) && empty($plate2CountryDesc))) {
            unset($this->plate2CountryDesc);
        } else {
            $this->plate2CountryDesc = $plate2CountryDesc;
        }
        return $this;
    }
    /**
     * Get plate2MeanOfTransport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlate2MeanOfTransport()
    {
        return isset($this->plate2MeanOfTransport) ? $this->plate2MeanOfTransport : null;
    }
    /**
     * Set plate2MeanOfTransport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $plate2MeanOfTransport
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setPlate2MeanOfTransport($plate2MeanOfTransport = null)
    {
        // validation for constraint: string
        if (!is_null($plate2MeanOfTransport) && !is_string($plate2MeanOfTransport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plate2MeanOfTransport, true), gettype($plate2MeanOfTransport)), __LINE__);
        }
        if (is_null($plate2MeanOfTransport) || (is_array($plate2MeanOfTransport) && empty($plate2MeanOfTransport))) {
            unset($this->plate2MeanOfTransport);
        } else {
            $this->plate2MeanOfTransport = $plate2MeanOfTransport;
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * Get rfrContractThird value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRfrContractThird()
    {
        return isset($this->rfrContractThird) ? $this->rfrContractThird : null;
    }
    /**
     * Set rfrContractThird value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rfrContractThird
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setRfrContractThird($rfrContractThird = null)
    {
        // validation for constraint: string
        if (!is_null($rfrContractThird) && !is_string($rfrContractThird)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rfrContractThird, true), gettype($rfrContractThird)), __LINE__);
        }
        if (is_null($rfrContractThird) || (is_array($rfrContractThird) && empty($rfrContractThird))) {
            unset($this->rfrContractThird);
        } else {
            $this->rfrContractThird = $rfrContractThird;
        }
        return $this;
    }
    /**
     * Get rfrOrderThird value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRfrOrderThird()
    {
        return isset($this->rfrOrderThird) ? $this->rfrOrderThird : null;
    }
    /**
     * Set rfrOrderThird value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rfrOrderThird
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setRfrOrderThird($rfrOrderThird = null)
    {
        // validation for constraint: string
        if (!is_null($rfrOrderThird) && !is_string($rfrOrderThird)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rfrOrderThird, true), gettype($rfrOrderThird)), __LINE__);
        }
        if (is_null($rfrOrderThird) || (is_array($rfrOrderThird) && empty($rfrOrderThird))) {
            unset($this->rfrOrderThird);
        } else {
            $this->rfrOrderThird = $rfrOrderThird;
        }
        return $this;
    }
    /**
     * Get destinationAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDestinationAddress()
    {
        return isset($this->destinationAddress) ? $this->destinationAddress : null;
    }
    /**
     * Set destinationAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $destinationAddress
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setDestinationAddress($destinationAddress = null)
    {
        // validation for constraint: string
        if (!is_null($destinationAddress) && !is_string($destinationAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationAddress, true), gettype($destinationAddress)), __LINE__);
        }
        if (is_null($destinationAddress) || (is_array($destinationAddress) && empty($destinationAddress))) {
            unset($this->destinationAddress);
        } else {
            $this->destinationAddress = $destinationAddress;
        }
        return $this;
    }
    /**
     * Get contactPhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContactPhone()
    {
        return isset($this->contactPhone) ? $this->contactPhone : null;
    }
    /**
     * Set contactPhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contactPhone
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setContactPhone($contactPhone = null)
    {
        // validation for constraint: string
        if (!is_null($contactPhone) && !is_string($contactPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPhone, true), gettype($contactPhone)), __LINE__);
        }
        if (is_null($contactPhone) || (is_array($contactPhone) && empty($contactPhone))) {
            unset($this->contactPhone);
        } else {
            $this->contactPhone = $contactPhone;
        }
        return $this;
    }
    /**
     * Get destinationTimetable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDestinationTimetable()
    {
        return isset($this->destinationTimetable) ? $this->destinationTimetable : null;
    }
    /**
     * Set destinationTimetable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $destinationTimetable
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setDestinationTimetable($destinationTimetable = null)
    {
        // validation for constraint: string
        if (!is_null($destinationTimetable) && !is_string($destinationTimetable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationTimetable, true), gettype($destinationTimetable)), __LINE__);
        }
        if (is_null($destinationTimetable) || (is_array($destinationTimetable) && empty($destinationTimetable))) {
            unset($this->destinationTimetable);
        } else {
            $this->destinationTimetable = $destinationTimetable;
        }
        return $this;
    }
    /**
     * Get awardeeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAwardeeName()
    {
        return isset($this->awardeeName) ? $this->awardeeName : null;
    }
    /**
     * Set awardeeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $awardeeName
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setAwardeeName($awardeeName = null)
    {
        // validation for constraint: string
        if (!is_null($awardeeName) && !is_string($awardeeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($awardeeName, true), gettype($awardeeName)), __LINE__);
        }
        if (is_null($awardeeName) || (is_array($awardeeName) && empty($awardeeName))) {
            unset($this->awardeeName);
        } else {
            $this->awardeeName = $awardeeName;
        }
        return $this;
    }
    /**
     * Get awardeeAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAwardeeAddress()
    {
        return isset($this->awardeeAddress) ? $this->awardeeAddress : null;
    }
    /**
     * Set awardeeAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $awardeeAddress
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setAwardeeAddress($awardeeAddress = null)
    {
        // validation for constraint: string
        if (!is_null($awardeeAddress) && !is_string($awardeeAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($awardeeAddress, true), gettype($awardeeAddress)), __LINE__);
        }
        if (is_null($awardeeAddress) || (is_array($awardeeAddress) && empty($awardeeAddress))) {
            unset($this->awardeeAddress);
        } else {
            $this->awardeeAddress = $awardeeAddress;
        }
        return $this;
    }
    /**
     * Get awardeeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAwardeeCode()
    {
        return isset($this->awardeeCode) ? $this->awardeeCode : null;
    }
    /**
     * Set awardeeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $awardeeCode
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setAwardeeCode($awardeeCode = null)
    {
        // validation for constraint: string
        if (!is_null($awardeeCode) && !is_string($awardeeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($awardeeCode, true), gettype($awardeeCode)), __LINE__);
        }
        if (is_null($awardeeCode) || (is_array($awardeeCode) && empty($awardeeCode))) {
            unset($this->awardeeCode);
        } else {
            $this->awardeeCode = $awardeeCode;
        }
        return $this;
    }
    /**
     * Get awardeeCountry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAwardeeCountry()
    {
        return isset($this->awardeeCountry) ? $this->awardeeCountry : null;
    }
    /**
     * Set awardeeCountry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $awardeeCountry
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setAwardeeCountry($awardeeCountry = null)
    {
        // validation for constraint: string
        if (!is_null($awardeeCountry) && !is_string($awardeeCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($awardeeCountry, true), gettype($awardeeCountry)), __LINE__);
        }
        if (is_null($awardeeCountry) || (is_array($awardeeCountry) && empty($awardeeCountry))) {
            unset($this->awardeeCountry);
        } else {
            $this->awardeeCountry = $awardeeCountry;
        }
        return $this;
    }
    /**
     * Get awardeeCountryDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAwardeeCountryDesc()
    {
        return isset($this->awardeeCountryDesc) ? $this->awardeeCountryDesc : null;
    }
    /**
     * Set awardeeCountryDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $awardeeCountryDesc
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setAwardeeCountryDesc($awardeeCountryDesc = null)
    {
        // validation for constraint: string
        if (!is_null($awardeeCountryDesc) && !is_string($awardeeCountryDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($awardeeCountryDesc, true), gettype($awardeeCountryDesc)), __LINE__);
        }
        if (is_null($awardeeCountryDesc) || (is_array($awardeeCountryDesc) && empty($awardeeCountryDesc))) {
            unset($this->awardeeCountryDesc);
        } else {
            $this->awardeeCountryDesc = $awardeeCountryDesc;
        }
        return $this;
    }
    /**
     * Get awardeeProvince value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAwardeeProvince()
    {
        return isset($this->awardeeProvince) ? $this->awardeeProvince : null;
    }
    /**
     * Set awardeeProvince value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $awardeeProvince
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setAwardeeProvince($awardeeProvince = null)
    {
        // validation for constraint: string
        if (!is_null($awardeeProvince) && !is_string($awardeeProvince)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($awardeeProvince, true), gettype($awardeeProvince)), __LINE__);
        }
        if (is_null($awardeeProvince) || (is_array($awardeeProvince) && empty($awardeeProvince))) {
            unset($this->awardeeProvince);
        } else {
            $this->awardeeProvince = $awardeeProvince;
        }
        return $this;
    }
    /**
     * Get awardeeProvinceDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAwardeeProvinceDesc()
    {
        return isset($this->awardeeProvinceDesc) ? $this->awardeeProvinceDesc : null;
    }
    /**
     * Set awardeeProvinceDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $awardeeProvinceDesc
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setAwardeeProvinceDesc($awardeeProvinceDesc = null)
    {
        // validation for constraint: string
        if (!is_null($awardeeProvinceDesc) && !is_string($awardeeProvinceDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($awardeeProvinceDesc, true), gettype($awardeeProvinceDesc)), __LINE__);
        }
        if (is_null($awardeeProvinceDesc) || (is_array($awardeeProvinceDesc) && empty($awardeeProvinceDesc))) {
            unset($this->awardeeProvinceDesc);
        } else {
            $this->awardeeProvinceDesc = $awardeeProvinceDesc;
        }
        return $this;
    }
    /**
     * Get awardeeCity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAwardeeCity()
    {
        return isset($this->awardeeCity) ? $this->awardeeCity : null;
    }
    /**
     * Set awardeeCity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $awardeeCity
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setAwardeeCity($awardeeCity = null)
    {
        // validation for constraint: string
        if (!is_null($awardeeCity) && !is_string($awardeeCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($awardeeCity, true), gettype($awardeeCity)), __LINE__);
        }
        if (is_null($awardeeCity) || (is_array($awardeeCity) && empty($awardeeCity))) {
            unset($this->awardeeCity);
        } else {
            $this->awardeeCity = $awardeeCity;
        }
        return $this;
    }
    /**
     * Get obs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getObs()
    {
        return isset($this->obs) ? $this->obs : null;
    }
    /**
     * Set obs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $obs
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setObs($obs = null)
    {
        // validation for constraint: string
        if (!is_null($obs) && !is_string($obs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obs, true), gettype($obs)), __LINE__);
        }
        if (is_null($obs) || (is_array($obs) && empty($obs))) {
            unset($this->obs);
        } else {
            $this->obs = $obs;
        }
        return $this;
    }
    /**
     * Get obsWaybillNote value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getObsWaybillNote()
    {
        return isset($this->obsWaybillNote) ? $this->obsWaybillNote : null;
    }
    /**
     * Set obsWaybillNote value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $obsWaybillNote
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setObsWaybillNote($obsWaybillNote = null)
    {
        // validation for constraint: string
        if (!is_null($obsWaybillNote) && !is_string($obsWaybillNote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obsWaybillNote, true), gettype($obsWaybillNote)), __LINE__);
        }
        if (is_null($obsWaybillNote) || (is_array($obsWaybillNote) && empty($obsWaybillNote))) {
            unset($this->obsWaybillNote);
        } else {
            $this->obsWaybillNote = $obsWaybillNote;
        }
        return $this;
    }
    /**
     * Get flexiTare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getFlexiTare()
    {
        return isset($this->flexiTare) ? $this->flexiTare : null;
    }
    /**
     * Set flexiTare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $flexiTare
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setFlexiTare($flexiTare = null)
    {
        // validation for constraint: float
        if (!is_null($flexiTare) && !(is_float($flexiTare) || is_numeric($flexiTare))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($flexiTare, true), gettype($flexiTare)), __LINE__);
        }
        if (is_null($flexiTare) || (is_array($flexiTare) && empty($flexiTare))) {
            unset($this->flexiTare);
        } else {
            $this->flexiTare = $flexiTare;
        }
        return $this;
    }
    /**
     * Get flexiContainer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFlexiContainer()
    {
        return isset($this->flexiContainer) ? $this->flexiContainer : null;
    }
    /**
     * Set flexiContainer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $flexiContainer
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setFlexiContainer($flexiContainer = null)
    {
        // validation for constraint: string
        if (!is_null($flexiContainer) && !is_string($flexiContainer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flexiContainer, true), gettype($flexiContainer)), __LINE__);
        }
        if (is_null($flexiContainer) || (is_array($flexiContainer) && empty($flexiContainer))) {
            unset($this->flexiContainer);
        } else {
            $this->flexiContainer = $flexiContainer;
        }
        return $this;
    }
    /**
     * Get flexiBookNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFlexiBookNumber()
    {
        return isset($this->flexiBookNumber) ? $this->flexiBookNumber : null;
    }
    /**
     * Set flexiBookNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $flexiBookNumber
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setFlexiBookNumber($flexiBookNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flexiBookNumber) && !is_string($flexiBookNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flexiBookNumber, true), gettype($flexiBookNumber)), __LINE__);
        }
        if (is_null($flexiBookNumber) || (is_array($flexiBookNumber) && empty($flexiBookNumber))) {
            unset($this->flexiBookNumber);
        } else {
            $this->flexiBookNumber = $flexiBookNumber;
        }
        return $this;
    }
    /**
     * Get tankType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTankType()
    {
        return isset($this->tankType) ? $this->tankType : null;
    }
    /**
     * Set tankType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tankType
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setTankType($tankType = null)
    {
        // validation for constraint: string
        if (!is_null($tankType) && !is_string($tankType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tankType, true), gettype($tankType)), __LINE__);
        }
        if (is_null($tankType) || (is_array($tankType) && empty($tankType))) {
            unset($this->tankType);
        } else {
            $this->tankType = $tankType;
        }
        return $this;
    }
    /**
     * Get swtCallOff value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSwtCallOff()
    {
        return isset($this->swtCallOff) ? $this->swtCallOff : null;
    }
    /**
     * Set swtCallOff value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $swtCallOff
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setSwtCallOff($swtCallOff = null)
    {
        // validation for constraint: string
        if (!is_null($swtCallOff) && !is_string($swtCallOff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swtCallOff, true), gettype($swtCallOff)), __LINE__);
        }
        if (is_null($swtCallOff) || (is_array($swtCallOff) && empty($swtCallOff))) {
            unset($this->swtCallOff);
        } else {
            $this->swtCallOff = $swtCallOff;
        }
        return $this;
    }
    /**
     * Get driverId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverId()
    {
        return isset($this->driverId) ? $this->driverId : null;
    }
    /**
     * Set driverId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverId
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setDriverId($driverId = null)
    {
        // validation for constraint: string
        if (!is_null($driverId) && !is_string($driverId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverId, true), gettype($driverId)), __LINE__);
        }
        if (is_null($driverId) || (is_array($driverId) && empty($driverId))) {
            unset($this->driverId);
        } else {
            $this->driverId = $driverId;
        }
        return $this;
    }
    /**
     * Get driverIdCountry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverIdCountry()
    {
        return isset($this->driverIdCountry) ? $this->driverIdCountry : null;
    }
    /**
     * Set driverIdCountry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverIdCountry
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setDriverIdCountry($driverIdCountry = null)
    {
        // validation for constraint: string
        if (!is_null($driverIdCountry) && !is_string($driverIdCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverIdCountry, true), gettype($driverIdCountry)), __LINE__);
        }
        if (is_null($driverIdCountry) || (is_array($driverIdCountry) && empty($driverIdCountry))) {
            unset($this->driverIdCountry);
        } else {
            $this->driverIdCountry = $driverIdCountry;
        }
        return $this;
    }
    /**
     * Get driverIdCountryDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverIdCountryDesc()
    {
        return isset($this->driverIdCountryDesc) ? $this->driverIdCountryDesc : null;
    }
    /**
     * Set driverIdCountryDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverIdCountryDesc
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setDriverIdCountryDesc($driverIdCountryDesc = null)
    {
        // validation for constraint: string
        if (!is_null($driverIdCountryDesc) && !is_string($driverIdCountryDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverIdCountryDesc, true), gettype($driverIdCountryDesc)), __LINE__);
        }
        if (is_null($driverIdCountryDesc) || (is_array($driverIdCountryDesc) && empty($driverIdCountryDesc))) {
            unset($this->driverIdCountryDesc);
        } else {
            $this->driverIdCountryDesc = $driverIdCountryDesc;
        }
        return $this;
    }
    /**
     * Get driverName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverName()
    {
        return isset($this->driverName) ? $this->driverName : null;
    }
    /**
     * Set driverName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverName
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setDriverName($driverName = null)
    {
        // validation for constraint: string
        if (!is_null($driverName) && !is_string($driverName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverName, true), gettype($driverName)), __LINE__);
        }
        if (is_null($driverName) || (is_array($driverName) && empty($driverName))) {
            unset($this->driverName);
        } else {
            $this->driverName = $driverName;
        }
        return $this;
    }
    /**
     * Get swtSample value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSwtSample()
    {
        return isset($this->swtSample) ? $this->swtSample : null;
    }
    /**
     * Set swtSample value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $swtSample
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setSwtSample($swtSample = null)
    {
        // validation for constraint: string
        if (!is_null($swtSample) && !is_string($swtSample)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swtSample, true), gettype($swtSample)), __LINE__);
        }
        if (is_null($swtSample) || (is_array($swtSample) && empty($swtSample))) {
            unset($this->swtSample);
        } else {
            $this->swtSample = $swtSample;
        }
        return $this;
    }
    /**
     * Get priceTransport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPriceTransport()
    {
        return isset($this->priceTransport) ? $this->priceTransport : null;
    }
    /**
     * Set priceTransport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $priceTransport
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setPriceTransport($priceTransport = null)
    {
        // validation for constraint: float
        if (!is_null($priceTransport) && !(is_float($priceTransport) || is_numeric($priceTransport))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceTransport, true), gettype($priceTransport)), __LINE__);
        }
        if (is_null($priceTransport) || (is_array($priceTransport) && empty($priceTransport))) {
            unset($this->priceTransport);
        } else {
            $this->priceTransport = $priceTransport;
        }
        return $this;
    }
    /**
     * Get currencyPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrencyPrice()
    {
        return isset($this->currencyPrice) ? $this->currencyPrice : null;
    }
    /**
     * Set currencyPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currencyPrice
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setCurrencyPrice($currencyPrice = null)
    {
        // validation for constraint: string
        if (!is_null($currencyPrice) && !is_string($currencyPrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyPrice, true), gettype($currencyPrice)), __LINE__);
        }
        if (is_null($currencyPrice) || (is_array($currencyPrice) && empty($currencyPrice))) {
            unset($this->currencyPrice);
        } else {
            $this->currencyPrice = $currencyPrice;
        }
        return $this;
    }
    /**
     * Get umPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUmPrice()
    {
        return isset($this->umPrice) ? $this->umPrice : null;
    }
    /**
     * Set umPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $umPrice
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setUmPrice($umPrice = null)
    {
        // validation for constraint: string
        if (!is_null($umPrice) && !is_string($umPrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($umPrice, true), gettype($umPrice)), __LINE__);
        }
        if (is_null($umPrice) || (is_array($umPrice) && empty($umPrice))) {
            unset($this->umPrice);
        } else {
            $this->umPrice = $umPrice;
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * Get listContracts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \bunge\StructType\RespPlateAuthContract[]|null
     */
    public function getListContracts()
    {
        return isset($this->listContracts) ? $this->listContracts : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListContracts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListContracts method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListContractsForArrayConstraintsFromSetListContracts(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $insertPlateAuthorizationListContractsItem) {
            // validation for constraint: itemType
            if (!$insertPlateAuthorizationListContractsItem instanceof \bunge\StructType\RespPlateAuthContract) {
                $invalidValues[] = is_object($insertPlateAuthorizationListContractsItem) ? get_class($insertPlateAuthorizationListContractsItem) : sprintf('%s(%s)', gettype($insertPlateAuthorizationListContractsItem), var_export($insertPlateAuthorizationListContractsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listContracts property can only contain items of type \bunge\StructType\RespPlateAuthContract, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set listContracts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \bunge\StructType\RespPlateAuthContract[] $listContracts
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setListContracts(array $listContracts = array())
    {
        // validation for constraint: array
        if ('' !== ($listContractsArrayErrorMessage = self::validateListContractsForArrayConstraintsFromSetListContracts($listContracts))) {
            throw new \InvalidArgumentException($listContractsArrayErrorMessage, __LINE__);
        }
        if (is_null($listContracts) || (is_array($listContracts) && empty($listContracts))) {
            unset($this->listContracts);
        } else {
            $this->listContracts = $listContracts;
        }
        return $this;
    }
    /**
     * Add item to listContracts value
     * @throws \InvalidArgumentException
     * @param \bunge\StructType\RespPlateAuthContract $item
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function addToListContracts(\bunge\StructType\RespPlateAuthContract $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \bunge\StructType\RespPlateAuthContract) {
            throw new \InvalidArgumentException(sprintf('The listContracts property can only contain items of type \bunge\StructType\RespPlateAuthContract, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listContracts[] = $item;
        return $this;
    }
    /**
     * Get listStockTransferOrders value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder[]|null
     */
    public function getListStockTransferOrders()
    {
        return isset($this->listStockTransferOrders) ? $this->listStockTransferOrders : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListStockTransferOrders method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListStockTransferOrders method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListStockTransferOrdersForArrayConstraintsFromSetListStockTransferOrders(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $insertPlateAuthorizationListStockTransferOrdersItem) {
            // validation for constraint: itemType
            if (!$insertPlateAuthorizationListStockTransferOrdersItem instanceof \bunge\StructType\RespPlateAuthStockTransferOrder) {
                $invalidValues[] = is_object($insertPlateAuthorizationListStockTransferOrdersItem) ? get_class($insertPlateAuthorizationListStockTransferOrdersItem) : sprintf('%s(%s)', gettype($insertPlateAuthorizationListStockTransferOrdersItem), var_export($insertPlateAuthorizationListStockTransferOrdersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listStockTransferOrders property can only contain items of type \bunge\StructType\RespPlateAuthStockTransferOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set listStockTransferOrders value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \bunge\StructType\RespPlateAuthStockTransferOrder[] $listStockTransferOrders
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setListStockTransferOrders(array $listStockTransferOrders = array())
    {
        // validation for constraint: array
        if ('' !== ($listStockTransferOrdersArrayErrorMessage = self::validateListStockTransferOrdersForArrayConstraintsFromSetListStockTransferOrders($listStockTransferOrders))) {
            throw new \InvalidArgumentException($listStockTransferOrdersArrayErrorMessage, __LINE__);
        }
        if (is_null($listStockTransferOrders) || (is_array($listStockTransferOrders) && empty($listStockTransferOrders))) {
            unset($this->listStockTransferOrders);
        } else {
            $this->listStockTransferOrders = $listStockTransferOrders;
        }
        return $this;
    }
    /**
     * Add item to listStockTransferOrders value
     * @throws \InvalidArgumentException
     * @param \bunge\StructType\RespPlateAuthStockTransferOrder $item
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function addToListStockTransferOrders(\bunge\StructType\RespPlateAuthStockTransferOrder $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \bunge\StructType\RespPlateAuthStockTransferOrder) {
            throw new \InvalidArgumentException(sprintf('The listStockTransferOrders property can only contain items of type \bunge\StructType\RespPlateAuthStockTransferOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listStockTransferOrders[] = $item;
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
     * @return \bunge\StructType\InsertPlateAuthorization
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
     * Get whoContractsTransport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWhoContractsTransport()
    {
        return isset($this->whoContractsTransport) ? $this->whoContractsTransport : null;
    }
    /**
     * Set whoContractsTransport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $whoContractsTransport
     * @return \bunge\StructType\InsertPlateAuthorization
     */
    public function setWhoContractsTransport($whoContractsTransport = null)
    {
        // validation for constraint: string
        if (!is_null($whoContractsTransport) && !is_string($whoContractsTransport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($whoContractsTransport, true), gettype($whoContractsTransport)), __LINE__);
        }
        if (is_null($whoContractsTransport) || (is_array($whoContractsTransport) && empty($whoContractsTransport))) {
            unset($this->whoContractsTransport);
        } else {
            $this->whoContractsTransport = $whoContractsTransport;
        }
        return $this;
    }
}
