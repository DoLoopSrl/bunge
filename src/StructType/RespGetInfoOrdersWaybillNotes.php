<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespGetInfoOrdersWaybillNotes StructType
 * @subpackage Structs
 */
class RespGetInfoOrdersWaybillNotes extends AbstractStructBase
{
    /**
     * The executionContract
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $executionContract;
    /**
     * The itemExecutionContract
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $itemExecutionContract;
    /**
     * The itemMasterContract
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $itemMasterContract;
    /**
     * The masterContract
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $masterContract;
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
     * The waybillLinNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $waybillLinNumber;
    /**
     * The waybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $waybillNumber;
    /**
     * Constructor method for RespGetInfoOrdersWaybillNotes
     * @uses RespGetInfoOrdersWaybillNotes::setExecutionContract()
     * @uses RespGetInfoOrdersWaybillNotes::setItemExecutionContract()
     * @uses RespGetInfoOrdersWaybillNotes::setItemMasterContract()
     * @uses RespGetInfoOrdersWaybillNotes::setMasterContract()
     * @uses RespGetInfoOrdersWaybillNotes::setQuantity()
     * @uses RespGetInfoOrdersWaybillNotes::setUm()
     * @uses RespGetInfoOrdersWaybillNotes::setWaybillLinNumber()
     * @uses RespGetInfoOrdersWaybillNotes::setWaybillNumber()
     * @param string $executionContract
     * @param float $itemExecutionContract
     * @param float $itemMasterContract
     * @param string $masterContract
     * @param float $quantity
     * @param string $um
     * @param float $waybillLinNumber
     * @param string $waybillNumber
     */
    public function __construct($executionContract = null, $itemExecutionContract = null, $itemMasterContract = null, $masterContract = null, $quantity = null, $um = null, $waybillLinNumber = null, $waybillNumber = null)
    {
        $this
            ->setExecutionContract($executionContract)
            ->setItemExecutionContract($itemExecutionContract)
            ->setItemMasterContract($itemMasterContract)
            ->setMasterContract($masterContract)
            ->setQuantity($quantity)
            ->setUm($um)
            ->setWaybillLinNumber($waybillLinNumber)
            ->setWaybillNumber($waybillNumber);
    }
    /**
     * Get executionContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExecutionContract()
    {
        return isset($this->executionContract) ? $this->executionContract : null;
    }
    /**
     * Set executionContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $executionContract
     * @return \bunge\StructType\RespGetInfoOrdersWaybillNotes
     */
    public function setExecutionContract($executionContract = null)
    {
        // validation for constraint: string
        if (!is_null($executionContract) && !is_string($executionContract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($executionContract, true), gettype($executionContract)), __LINE__);
        }
        if (is_null($executionContract) || (is_array($executionContract) && empty($executionContract))) {
            unset($this->executionContract);
        } else {
            $this->executionContract = $executionContract;
        }
        return $this;
    }
    /**
     * Get itemExecutionContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getItemExecutionContract()
    {
        return isset($this->itemExecutionContract) ? $this->itemExecutionContract : null;
    }
    /**
     * Set itemExecutionContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $itemExecutionContract
     * @return \bunge\StructType\RespGetInfoOrdersWaybillNotes
     */
    public function setItemExecutionContract($itemExecutionContract = null)
    {
        // validation for constraint: float
        if (!is_null($itemExecutionContract) && !(is_float($itemExecutionContract) || is_numeric($itemExecutionContract))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemExecutionContract, true), gettype($itemExecutionContract)), __LINE__);
        }
        if (is_null($itemExecutionContract) || (is_array($itemExecutionContract) && empty($itemExecutionContract))) {
            unset($this->itemExecutionContract);
        } else {
            $this->itemExecutionContract = $itemExecutionContract;
        }
        return $this;
    }
    /**
     * Get itemMasterContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getItemMasterContract()
    {
        return isset($this->itemMasterContract) ? $this->itemMasterContract : null;
    }
    /**
     * Set itemMasterContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $itemMasterContract
     * @return \bunge\StructType\RespGetInfoOrdersWaybillNotes
     */
    public function setItemMasterContract($itemMasterContract = null)
    {
        // validation for constraint: float
        if (!is_null($itemMasterContract) && !(is_float($itemMasterContract) || is_numeric($itemMasterContract))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemMasterContract, true), gettype($itemMasterContract)), __LINE__);
        }
        if (is_null($itemMasterContract) || (is_array($itemMasterContract) && empty($itemMasterContract))) {
            unset($this->itemMasterContract);
        } else {
            $this->itemMasterContract = $itemMasterContract;
        }
        return $this;
    }
    /**
     * Get masterContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMasterContract()
    {
        return isset($this->masterContract) ? $this->masterContract : null;
    }
    /**
     * Set masterContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $masterContract
     * @return \bunge\StructType\RespGetInfoOrdersWaybillNotes
     */
    public function setMasterContract($masterContract = null)
    {
        // validation for constraint: string
        if (!is_null($masterContract) && !is_string($masterContract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($masterContract, true), gettype($masterContract)), __LINE__);
        }
        if (is_null($masterContract) || (is_array($masterContract) && empty($masterContract))) {
            unset($this->masterContract);
        } else {
            $this->masterContract = $masterContract;
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
     * @return \bunge\StructType\RespGetInfoOrdersWaybillNotes
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
     * @return \bunge\StructType\RespGetInfoOrdersWaybillNotes
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
     * Get waybillLinNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getWaybillLinNumber()
    {
        return isset($this->waybillLinNumber) ? $this->waybillLinNumber : null;
    }
    /**
     * Set waybillLinNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $waybillLinNumber
     * @return \bunge\StructType\RespGetInfoOrdersWaybillNotes
     */
    public function setWaybillLinNumber($waybillLinNumber = null)
    {
        // validation for constraint: float
        if (!is_null($waybillLinNumber) && !(is_float($waybillLinNumber) || is_numeric($waybillLinNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($waybillLinNumber, true), gettype($waybillLinNumber)), __LINE__);
        }
        if (is_null($waybillLinNumber) || (is_array($waybillLinNumber) && empty($waybillLinNumber))) {
            unset($this->waybillLinNumber);
        } else {
            $this->waybillLinNumber = $waybillLinNumber;
        }
        return $this;
    }
    /**
     * Get waybillNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWaybillNumber()
    {
        return isset($this->waybillNumber) ? $this->waybillNumber : null;
    }
    /**
     * Set waybillNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $waybillNumber
     * @return \bunge\StructType\RespGetInfoOrdersWaybillNotes
     */
    public function setWaybillNumber($waybillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($waybillNumber) && !is_string($waybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($waybillNumber, true), gettype($waybillNumber)), __LINE__);
        }
        if (is_null($waybillNumber) || (is_array($waybillNumber) && empty($waybillNumber))) {
            unset($this->waybillNumber);
        } else {
            $this->waybillNumber = $waybillNumber;
        }
        return $this;
    }
}
