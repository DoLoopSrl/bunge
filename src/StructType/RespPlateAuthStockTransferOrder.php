<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespPlateAuthStockTransferOrder StructType
 * @subpackage Structs
 */
class RespPlateAuthStockTransferOrder extends AbstractStructBase
{
    /**
     * The act
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $act;
    /**
     * The docDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $docDate;
    /**
     * The idSto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $idSto;
    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $quantity;
    /**
     * The stoItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $stoItem;
    /**
     * The stoNum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $stoNum;
    /**
     * The stoType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $stoType;
    /**
     * The um
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $um;
    /**
     * The wbsExt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $wbsExt;
    /**
     * The wbsInt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $wbsInt;
    /**
     * Constructor method for RespPlateAuthStockTransferOrder
     * @uses RespPlateAuthStockTransferOrder::setAct()
     * @uses RespPlateAuthStockTransferOrder::setDocDate()
     * @uses RespPlateAuthStockTransferOrder::setIdSto()
     * @uses RespPlateAuthStockTransferOrder::setQuantity()
     * @uses RespPlateAuthStockTransferOrder::setStoItem()
     * @uses RespPlateAuthStockTransferOrder::setStoNum()
     * @uses RespPlateAuthStockTransferOrder::setStoType()
     * @uses RespPlateAuthStockTransferOrder::setUm()
     * @uses RespPlateAuthStockTransferOrder::setWbsExt()
     * @uses RespPlateAuthStockTransferOrder::setWbsInt()
     * @param string $act
     * @param string $docDate
     * @param float $idSto
     * @param float $quantity
     * @param string $stoItem
     * @param string $stoNum
     * @param string $stoType
     * @param string $um
     * @param string $wbsExt
     * @param float $wbsInt
     */
    public function __construct($act = null, $docDate = null, $idSto = null, $quantity = null, $stoItem = null, $stoNum = null, $stoType = null, $um = null, $wbsExt = null, $wbsInt = null)
    {
        $this
            ->setAct($act)
            ->setDocDate($docDate)
            ->setIdSto($idSto)
            ->setQuantity($quantity)
            ->setStoItem($stoItem)
            ->setStoNum($stoNum)
            ->setStoType($stoType)
            ->setUm($um)
            ->setWbsExt($wbsExt)
            ->setWbsInt($wbsInt);
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
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder
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
     * Get docDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocDate()
    {
        return isset($this->docDate) ? $this->docDate : null;
    }
    /**
     * Set docDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $docDate
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder
     */
    public function setDocDate($docDate = null)
    {
        // validation for constraint: string
        if (!is_null($docDate) && !is_string($docDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docDate, true), gettype($docDate)), __LINE__);
        }
        if (is_null($docDate) || (is_array($docDate) && empty($docDate))) {
            unset($this->docDate);
        } else {
            $this->docDate = $docDate;
        }
        return $this;
    }
    /**
     * Get idSto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getIdSto()
    {
        return isset($this->idSto) ? $this->idSto : null;
    }
    /**
     * Set idSto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $idSto
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder
     */
    public function setIdSto($idSto = null)
    {
        // validation for constraint: float
        if (!is_null($idSto) && !(is_float($idSto) || is_numeric($idSto))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($idSto, true), gettype($idSto)), __LINE__);
        }
        if (is_null($idSto) || (is_array($idSto) && empty($idSto))) {
            unset($this->idSto);
        } else {
            $this->idSto = $idSto;
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
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder
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
     * Get stoItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStoItem()
    {
        return isset($this->stoItem) ? $this->stoItem : null;
    }
    /**
     * Set stoItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stoItem
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder
     */
    public function setStoItem($stoItem = null)
    {
        // validation for constraint: string
        if (!is_null($stoItem) && !is_string($stoItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stoItem, true), gettype($stoItem)), __LINE__);
        }
        if (is_null($stoItem) || (is_array($stoItem) && empty($stoItem))) {
            unset($this->stoItem);
        } else {
            $this->stoItem = $stoItem;
        }
        return $this;
    }
    /**
     * Get stoNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStoNum()
    {
        return isset($this->stoNum) ? $this->stoNum : null;
    }
    /**
     * Set stoNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stoNum
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder
     */
    public function setStoNum($stoNum = null)
    {
        // validation for constraint: string
        if (!is_null($stoNum) && !is_string($stoNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stoNum, true), gettype($stoNum)), __LINE__);
        }
        if (is_null($stoNum) || (is_array($stoNum) && empty($stoNum))) {
            unset($this->stoNum);
        } else {
            $this->stoNum = $stoNum;
        }
        return $this;
    }
    /**
     * Get stoType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStoType()
    {
        return isset($this->stoType) ? $this->stoType : null;
    }
    /**
     * Set stoType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stoType
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder
     */
    public function setStoType($stoType = null)
    {
        // validation for constraint: string
        if (!is_null($stoType) && !is_string($stoType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stoType, true), gettype($stoType)), __LINE__);
        }
        if (is_null($stoType) || (is_array($stoType) && empty($stoType))) {
            unset($this->stoType);
        } else {
            $this->stoType = $stoType;
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
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder
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
     * Get wbsExt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWbsExt()
    {
        return isset($this->wbsExt) ? $this->wbsExt : null;
    }
    /**
     * Set wbsExt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $wbsExt
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder
     */
    public function setWbsExt($wbsExt = null)
    {
        // validation for constraint: string
        if (!is_null($wbsExt) && !is_string($wbsExt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wbsExt, true), gettype($wbsExt)), __LINE__);
        }
        if (is_null($wbsExt) || (is_array($wbsExt) && empty($wbsExt))) {
            unset($this->wbsExt);
        } else {
            $this->wbsExt = $wbsExt;
        }
        return $this;
    }
    /**
     * Get wbsInt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getWbsInt()
    {
        return isset($this->wbsInt) ? $this->wbsInt : null;
    }
    /**
     * Set wbsInt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $wbsInt
     * @return \bunge\StructType\RespPlateAuthStockTransferOrder
     */
    public function setWbsInt($wbsInt = null)
    {
        // validation for constraint: float
        if (!is_null($wbsInt) && !(is_float($wbsInt) || is_numeric($wbsInt))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($wbsInt, true), gettype($wbsInt)), __LINE__);
        }
        if (is_null($wbsInt) || (is_array($wbsInt) && empty($wbsInt))) {
            unset($this->wbsInt);
        } else {
            $this->wbsInt = $wbsInt;
        }
        return $this;
    }
}
