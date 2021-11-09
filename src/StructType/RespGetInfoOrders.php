<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespGetInfoOrders StructType
 * @subpackage Structs
 */
class RespGetInfoOrders extends AbstractStructBase
{
    /**
     * The batch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $batch;
    /**
     * The company
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $company;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The gross
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $gross;
    /**
     * The line
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $line;
    /**
     * The listWaybills
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \bunge\StructType\RespGetInfoOrdersWaybillNotes[]
     */
    public $listWaybills;
    /**
     * The location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $location;
    /**
     * The net
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $net;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $number;
    /**
     * The ordType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ordType;
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
     * The productDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $productDescription;
    /**
     * The sampleNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sampleNumber;
    /**
     * The sampleRequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sampleRequired;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The tare
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $tare;
    /**
     * The thirdName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $thirdName;
    /**
     * The timeArrival
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeArrival;
    /**
     * The timeClose
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeClose;
    /**
     * The timeCreation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeCreation;
    /**
     * The timeDeparture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeDeparture;
    /**
     * The timeEntry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeEntry;
    /**
     * The timeGross
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeGross;
    /**
     * The timeOpen
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeOpen;
    /**
     * The timePlateAuthCreation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timePlateAuthCreation;
    /**
     * The timeTare
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeTare;
    /**
     * The um
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $um;
    /**
     * Constructor method for RespGetInfoOrders
     * @uses RespGetInfoOrders::setBatch()
     * @uses RespGetInfoOrders::setCompany()
     * @uses RespGetInfoOrders::setDate()
     * @uses RespGetInfoOrders::setGross()
     * @uses RespGetInfoOrders::setLine()
     * @uses RespGetInfoOrders::setListWaybills()
     * @uses RespGetInfoOrders::setLocation()
     * @uses RespGetInfoOrders::setNet()
     * @uses RespGetInfoOrders::setNumber()
     * @uses RespGetInfoOrders::setOrdType()
     * @uses RespGetInfoOrders::setPlate1()
     * @uses RespGetInfoOrders::setPlate2()
     * @uses RespGetInfoOrders::setProductDescription()
     * @uses RespGetInfoOrders::setSampleNumber()
     * @uses RespGetInfoOrders::setSampleRequired()
     * @uses RespGetInfoOrders::setStatus()
     * @uses RespGetInfoOrders::setTare()
     * @uses RespGetInfoOrders::setThirdName()
     * @uses RespGetInfoOrders::setTimeArrival()
     * @uses RespGetInfoOrders::setTimeClose()
     * @uses RespGetInfoOrders::setTimeCreation()
     * @uses RespGetInfoOrders::setTimeDeparture()
     * @uses RespGetInfoOrders::setTimeEntry()
     * @uses RespGetInfoOrders::setTimeGross()
     * @uses RespGetInfoOrders::setTimeOpen()
     * @uses RespGetInfoOrders::setTimePlateAuthCreation()
     * @uses RespGetInfoOrders::setTimeTare()
     * @uses RespGetInfoOrders::setUm()
     * @param string $batch
     * @param float $company
     * @param string $date
     * @param float $gross
     * @param float $line
     * @param \bunge\StructType\RespGetInfoOrdersWaybillNotes[] $listWaybills
     * @param string $location
     * @param float $net
     * @param float $number
     * @param string $ordType
     * @param string $plate1
     * @param string $plate2
     * @param string $productDescription
     * @param string $sampleNumber
     * @param string $sampleRequired
     * @param string $status
     * @param float $tare
     * @param string $thirdName
     * @param string $timeArrival
     * @param string $timeClose
     * @param string $timeCreation
     * @param string $timeDeparture
     * @param string $timeEntry
     * @param string $timeGross
     * @param string $timeOpen
     * @param string $timePlateAuthCreation
     * @param string $timeTare
     * @param string $um
     */
    public function __construct($batch = null, $company = null, $date = null, $gross = null, $line = null, array $listWaybills = array(), $location = null, $net = null, $number = null, $ordType = null, $plate1 = null, $plate2 = null, $productDescription = null, $sampleNumber = null, $sampleRequired = null, $status = null, $tare = null, $thirdName = null, $timeArrival = null, $timeClose = null, $timeCreation = null, $timeDeparture = null, $timeEntry = null, $timeGross = null, $timeOpen = null, $timePlateAuthCreation = null, $timeTare = null, $um = null)
    {
        $this
            ->setBatch($batch)
            ->setCompany($company)
            ->setDate($date)
            ->setGross($gross)
            ->setLine($line)
            ->setListWaybills($listWaybills)
            ->setLocation($location)
            ->setNet($net)
            ->setNumber($number)
            ->setOrdType($ordType)
            ->setPlate1($plate1)
            ->setPlate2($plate2)
            ->setProductDescription($productDescription)
            ->setSampleNumber($sampleNumber)
            ->setSampleRequired($sampleRequired)
            ->setStatus($status)
            ->setTare($tare)
            ->setThirdName($thirdName)
            ->setTimeArrival($timeArrival)
            ->setTimeClose($timeClose)
            ->setTimeCreation($timeCreation)
            ->setTimeDeparture($timeDeparture)
            ->setTimeEntry($timeEntry)
            ->setTimeGross($timeGross)
            ->setTimeOpen($timeOpen)
            ->setTimePlateAuthCreation($timePlateAuthCreation)
            ->setTimeTare($timeTare)
            ->setUm($um);
    }
    /**
     * Get batch value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBatch()
    {
        return isset($this->batch) ? $this->batch : null;
    }
    /**
     * Set batch value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $batch
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setBatch($batch = null)
    {
        // validation for constraint: string
        if (!is_null($batch) && !is_string($batch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($batch, true), gettype($batch)), __LINE__);
        }
        if (is_null($batch) || (is_array($batch) && empty($batch))) {
            unset($this->batch);
        } else {
            $this->batch = $batch;
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
     * @return \bunge\StructType\RespGetInfoOrders
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
     * Get date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDate()
    {
        return isset($this->date) ? $this->date : null;
    }
    /**
     * Set date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $date
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        if (is_null($date) || (is_array($date) && empty($date))) {
            unset($this->date);
        } else {
            $this->date = $date;
        }
        return $this;
    }
    /**
     * Get gross value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getGross()
    {
        return isset($this->gross) ? $this->gross : null;
    }
    /**
     * Set gross value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $gross
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setGross($gross = null)
    {
        // validation for constraint: float
        if (!is_null($gross) && !(is_float($gross) || is_numeric($gross))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($gross, true), gettype($gross)), __LINE__);
        }
        if (is_null($gross) || (is_array($gross) && empty($gross))) {
            unset($this->gross);
        } else {
            $this->gross = $gross;
        }
        return $this;
    }
    /**
     * Get line value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getLine()
    {
        return isset($this->line) ? $this->line : null;
    }
    /**
     * Set line value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $line
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setLine($line = null)
    {
        // validation for constraint: float
        if (!is_null($line) && !(is_float($line) || is_numeric($line))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($line, true), gettype($line)), __LINE__);
        }
        if (is_null($line) || (is_array($line) && empty($line))) {
            unset($this->line);
        } else {
            $this->line = $line;
        }
        return $this;
    }
    /**
     * Get listWaybills value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \bunge\StructType\RespGetInfoOrdersWaybillNotes[]|null
     */
    public function getListWaybills()
    {
        return isset($this->listWaybills) ? $this->listWaybills : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListWaybills method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListWaybills method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListWaybillsForArrayConstraintsFromSetListWaybills(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respGetInfoOrdersListWaybillsItem) {
            // validation for constraint: itemType
            if (!$respGetInfoOrdersListWaybillsItem instanceof \bunge\StructType\RespGetInfoOrdersWaybillNotes) {
                $invalidValues[] = is_object($respGetInfoOrdersListWaybillsItem) ? get_class($respGetInfoOrdersListWaybillsItem) : sprintf('%s(%s)', gettype($respGetInfoOrdersListWaybillsItem), var_export($respGetInfoOrdersListWaybillsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listWaybills property can only contain items of type \bunge\StructType\RespGetInfoOrdersWaybillNotes, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set listWaybills value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \bunge\StructType\RespGetInfoOrdersWaybillNotes[] $listWaybills
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setListWaybills(array $listWaybills = array())
    {
        // validation for constraint: array
        if ('' !== ($listWaybillsArrayErrorMessage = self::validateListWaybillsForArrayConstraintsFromSetListWaybills($listWaybills))) {
            throw new \InvalidArgumentException($listWaybillsArrayErrorMessage, __LINE__);
        }
        if (is_null($listWaybills) || (is_array($listWaybills) && empty($listWaybills))) {
            unset($this->listWaybills);
        } else {
            $this->listWaybills = $listWaybills;
        }
        return $this;
    }
    /**
     * Add item to listWaybills value
     * @throws \InvalidArgumentException
     * @param \bunge\StructType\RespGetInfoOrdersWaybillNotes $item
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function addToListWaybills(\bunge\StructType\RespGetInfoOrdersWaybillNotes $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \bunge\StructType\RespGetInfoOrdersWaybillNotes) {
            throw new \InvalidArgumentException(sprintf('The listWaybills property can only contain items of type \bunge\StructType\RespGetInfoOrdersWaybillNotes, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listWaybills[] = $item;
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
     * @return \bunge\StructType\RespGetInfoOrders
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
     * Get net value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getNet()
    {
        return isset($this->net) ? $this->net : null;
    }
    /**
     * Set net value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $net
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setNet($net = null)
    {
        // validation for constraint: float
        if (!is_null($net) && !(is_float($net) || is_numeric($net))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($net, true), gettype($net)), __LINE__);
        }
        if (is_null($net) || (is_array($net) && empty($net))) {
            unset($this->net);
        } else {
            $this->net = $net;
        }
        return $this;
    }
    /**
     * Get number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getNumber()
    {
        return isset($this->number) ? $this->number : null;
    }
    /**
     * Set number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $number
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setNumber($number = null)
    {
        // validation for constraint: float
        if (!is_null($number) && !(is_float($number) || is_numeric($number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->number);
        } else {
            $this->number = $number;
        }
        return $this;
    }
    /**
     * Get ordType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrdType()
    {
        return isset($this->ordType) ? $this->ordType : null;
    }
    /**
     * Set ordType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ordType
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setOrdType($ordType = null)
    {
        // validation for constraint: string
        if (!is_null($ordType) && !is_string($ordType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ordType, true), gettype($ordType)), __LINE__);
        }
        if (is_null($ordType) || (is_array($ordType) && empty($ordType))) {
            unset($this->ordType);
        } else {
            $this->ordType = $ordType;
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
     * @return \bunge\StructType\RespGetInfoOrders
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
     * @return \bunge\StructType\RespGetInfoOrders
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
     * Get productDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductDescription()
    {
        return isset($this->productDescription) ? $this->productDescription : null;
    }
    /**
     * Set productDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productDescription
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setProductDescription($productDescription = null)
    {
        // validation for constraint: string
        if (!is_null($productDescription) && !is_string($productDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productDescription, true), gettype($productDescription)), __LINE__);
        }
        if (is_null($productDescription) || (is_array($productDescription) && empty($productDescription))) {
            unset($this->productDescription);
        } else {
            $this->productDescription = $productDescription;
        }
        return $this;
    }
    /**
     * Get sampleNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSampleNumber()
    {
        return isset($this->sampleNumber) ? $this->sampleNumber : null;
    }
    /**
     * Set sampleNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sampleNumber
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setSampleNumber($sampleNumber = null)
    {
        // validation for constraint: string
        if (!is_null($sampleNumber) && !is_string($sampleNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sampleNumber, true), gettype($sampleNumber)), __LINE__);
        }
        if (is_null($sampleNumber) || (is_array($sampleNumber) && empty($sampleNumber))) {
            unset($this->sampleNumber);
        } else {
            $this->sampleNumber = $sampleNumber;
        }
        return $this;
    }
    /**
     * Get sampleRequired value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSampleRequired()
    {
        return isset($this->sampleRequired) ? $this->sampleRequired : null;
    }
    /**
     * Set sampleRequired value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sampleRequired
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setSampleRequired($sampleRequired = null)
    {
        // validation for constraint: string
        if (!is_null($sampleRequired) && !is_string($sampleRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sampleRequired, true), gettype($sampleRequired)), __LINE__);
        }
        if (is_null($sampleRequired) || (is_array($sampleRequired) && empty($sampleRequired))) {
            unset($this->sampleRequired);
        } else {
            $this->sampleRequired = $sampleRequired;
        }
        return $this;
    }
    /**
     * Get status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }
    /**
     * Set status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->status);
        } else {
            $this->status = $status;
        }
        return $this;
    }
    /**
     * Get tare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTare()
    {
        return isset($this->tare) ? $this->tare : null;
    }
    /**
     * Set tare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $tare
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setTare($tare = null)
    {
        // validation for constraint: float
        if (!is_null($tare) && !(is_float($tare) || is_numeric($tare))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tare, true), gettype($tare)), __LINE__);
        }
        if (is_null($tare) || (is_array($tare) && empty($tare))) {
            unset($this->tare);
        } else {
            $this->tare = $tare;
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
     * @return \bunge\StructType\RespGetInfoOrders
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
     * Get timeArrival value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeArrival()
    {
        return isset($this->timeArrival) ? $this->timeArrival : null;
    }
    /**
     * Set timeArrival value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeArrival
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setTimeArrival($timeArrival = null)
    {
        // validation for constraint: string
        if (!is_null($timeArrival) && !is_string($timeArrival)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeArrival, true), gettype($timeArrival)), __LINE__);
        }
        if (is_null($timeArrival) || (is_array($timeArrival) && empty($timeArrival))) {
            unset($this->timeArrival);
        } else {
            $this->timeArrival = $timeArrival;
        }
        return $this;
    }
    /**
     * Get timeClose value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeClose()
    {
        return isset($this->timeClose) ? $this->timeClose : null;
    }
    /**
     * Set timeClose value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeClose
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setTimeClose($timeClose = null)
    {
        // validation for constraint: string
        if (!is_null($timeClose) && !is_string($timeClose)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeClose, true), gettype($timeClose)), __LINE__);
        }
        if (is_null($timeClose) || (is_array($timeClose) && empty($timeClose))) {
            unset($this->timeClose);
        } else {
            $this->timeClose = $timeClose;
        }
        return $this;
    }
    /**
     * Get timeCreation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeCreation()
    {
        return isset($this->timeCreation) ? $this->timeCreation : null;
    }
    /**
     * Set timeCreation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeCreation
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setTimeCreation($timeCreation = null)
    {
        // validation for constraint: string
        if (!is_null($timeCreation) && !is_string($timeCreation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeCreation, true), gettype($timeCreation)), __LINE__);
        }
        if (is_null($timeCreation) || (is_array($timeCreation) && empty($timeCreation))) {
            unset($this->timeCreation);
        } else {
            $this->timeCreation = $timeCreation;
        }
        return $this;
    }
    /**
     * Get timeDeparture value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeDeparture()
    {
        return isset($this->timeDeparture) ? $this->timeDeparture : null;
    }
    /**
     * Set timeDeparture value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeDeparture
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setTimeDeparture($timeDeparture = null)
    {
        // validation for constraint: string
        if (!is_null($timeDeparture) && !is_string($timeDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeDeparture, true), gettype($timeDeparture)), __LINE__);
        }
        if (is_null($timeDeparture) || (is_array($timeDeparture) && empty($timeDeparture))) {
            unset($this->timeDeparture);
        } else {
            $this->timeDeparture = $timeDeparture;
        }
        return $this;
    }
    /**
     * Get timeEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeEntry()
    {
        return isset($this->timeEntry) ? $this->timeEntry : null;
    }
    /**
     * Set timeEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeEntry
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setTimeEntry($timeEntry = null)
    {
        // validation for constraint: string
        if (!is_null($timeEntry) && !is_string($timeEntry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeEntry, true), gettype($timeEntry)), __LINE__);
        }
        if (is_null($timeEntry) || (is_array($timeEntry) && empty($timeEntry))) {
            unset($this->timeEntry);
        } else {
            $this->timeEntry = $timeEntry;
        }
        return $this;
    }
    /**
     * Get timeGross value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeGross()
    {
        return isset($this->timeGross) ? $this->timeGross : null;
    }
    /**
     * Set timeGross value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeGross
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setTimeGross($timeGross = null)
    {
        // validation for constraint: string
        if (!is_null($timeGross) && !is_string($timeGross)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeGross, true), gettype($timeGross)), __LINE__);
        }
        if (is_null($timeGross) || (is_array($timeGross) && empty($timeGross))) {
            unset($this->timeGross);
        } else {
            $this->timeGross = $timeGross;
        }
        return $this;
    }
    /**
     * Get timeOpen value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeOpen()
    {
        return isset($this->timeOpen) ? $this->timeOpen : null;
    }
    /**
     * Set timeOpen value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeOpen
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setTimeOpen($timeOpen = null)
    {
        // validation for constraint: string
        if (!is_null($timeOpen) && !is_string($timeOpen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeOpen, true), gettype($timeOpen)), __LINE__);
        }
        if (is_null($timeOpen) || (is_array($timeOpen) && empty($timeOpen))) {
            unset($this->timeOpen);
        } else {
            $this->timeOpen = $timeOpen;
        }
        return $this;
    }
    /**
     * Get timePlateAuthCreation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimePlateAuthCreation()
    {
        return isset($this->timePlateAuthCreation) ? $this->timePlateAuthCreation : null;
    }
    /**
     * Set timePlateAuthCreation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timePlateAuthCreation
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setTimePlateAuthCreation($timePlateAuthCreation = null)
    {
        // validation for constraint: string
        if (!is_null($timePlateAuthCreation) && !is_string($timePlateAuthCreation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timePlateAuthCreation, true), gettype($timePlateAuthCreation)), __LINE__);
        }
        if (is_null($timePlateAuthCreation) || (is_array($timePlateAuthCreation) && empty($timePlateAuthCreation))) {
            unset($this->timePlateAuthCreation);
        } else {
            $this->timePlateAuthCreation = $timePlateAuthCreation;
        }
        return $this;
    }
    /**
     * Get timeTare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeTare()
    {
        return isset($this->timeTare) ? $this->timeTare : null;
    }
    /**
     * Set timeTare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeTare
     * @return \bunge\StructType\RespGetInfoOrders
     */
    public function setTimeTare($timeTare = null)
    {
        // validation for constraint: string
        if (!is_null($timeTare) && !is_string($timeTare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeTare, true), gettype($timeTare)), __LINE__);
        }
        if (is_null($timeTare) || (is_array($timeTare) && empty($timeTare))) {
            unset($this->timeTare);
        } else {
            $this->timeTare = $timeTare;
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
     * @return \bunge\StructType\RespGetInfoOrders
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
}
