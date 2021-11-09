<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespPlateAuthContract StructType
 * @subpackage Structs
 */
class RespPlateAuthContract extends AbstractStructBase
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
     * The ecItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $ecItem;
    /**
     * The ecNum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ecNum;
    /**
     * The ensId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $ensId;
    /**
     * The fin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $fin;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $id;
    /**
     * The mcItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $mcItem;
    /**
     * The mcNum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $mcNum;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $order;
    /**
     * The qty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $qty;
    /**
     * The thirdCod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $thirdCod;
    /**
     * The thirdName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $thirdName;
    /**
     * The um
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $um;
    /**
     * Constructor method for RespPlateAuthContract
     * @uses RespPlateAuthContract::setAct()
     * @uses RespPlateAuthContract::setEcItem()
     * @uses RespPlateAuthContract::setEcNum()
     * @uses RespPlateAuthContract::setEnsId()
     * @uses RespPlateAuthContract::setFin()
     * @uses RespPlateAuthContract::setId()
     * @uses RespPlateAuthContract::setMcItem()
     * @uses RespPlateAuthContract::setMcNum()
     * @uses RespPlateAuthContract::setOrder()
     * @uses RespPlateAuthContract::setQty()
     * @uses RespPlateAuthContract::setThirdCod()
     * @uses RespPlateAuthContract::setThirdName()
     * @uses RespPlateAuthContract::setUm()
     * @param string $act
     * @param float $ecItem
     * @param string $ecNum
     * @param float $ensId
     * @param string $fin
     * @param float $id
     * @param float $mcItem
     * @param string $mcNum
     * @param float $order
     * @param float $qty
     * @param string $thirdCod
     * @param string $thirdName
     * @param string $um
     */
    public function __construct($act = null, $ecItem = null, $ecNum = null, $ensId = null, $fin = null, $id = null, $mcItem = null, $mcNum = null, $order = null, $qty = null, $thirdCod = null, $thirdName = null, $um = null)
    {
        $this
            ->setAct($act)
            ->setEcItem($ecItem)
            ->setEcNum($ecNum)
            ->setEnsId($ensId)
            ->setFin($fin)
            ->setId($id)
            ->setMcItem($mcItem)
            ->setMcNum($mcNum)
            ->setOrder($order)
            ->setQty($qty)
            ->setThirdCod($thirdCod)
            ->setThirdName($thirdName)
            ->setUm($um);
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
     * @return \bunge\StructType\RespPlateAuthContract
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
     * Get ecItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getEcItem()
    {
        return isset($this->ecItem) ? $this->ecItem : null;
    }
    /**
     * Set ecItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $ecItem
     * @return \bunge\StructType\RespPlateAuthContract
     */
    public function setEcItem($ecItem = null)
    {
        // validation for constraint: float
        if (!is_null($ecItem) && !(is_float($ecItem) || is_numeric($ecItem))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ecItem, true), gettype($ecItem)), __LINE__);
        }
        if (is_null($ecItem) || (is_array($ecItem) && empty($ecItem))) {
            unset($this->ecItem);
        } else {
            $this->ecItem = $ecItem;
        }
        return $this;
    }
    /**
     * Get ecNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEcNum()
    {
        return isset($this->ecNum) ? $this->ecNum : null;
    }
    /**
     * Set ecNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ecNum
     * @return \bunge\StructType\RespPlateAuthContract
     */
    public function setEcNum($ecNum = null)
    {
        // validation for constraint: string
        if (!is_null($ecNum) && !is_string($ecNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ecNum, true), gettype($ecNum)), __LINE__);
        }
        if (is_null($ecNum) || (is_array($ecNum) && empty($ecNum))) {
            unset($this->ecNum);
        } else {
            $this->ecNum = $ecNum;
        }
        return $this;
    }
    /**
     * Get ensId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getEnsId()
    {
        return isset($this->ensId) ? $this->ensId : null;
    }
    /**
     * Set ensId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $ensId
     * @return \bunge\StructType\RespPlateAuthContract
     */
    public function setEnsId($ensId = null)
    {
        // validation for constraint: float
        if (!is_null($ensId) && !(is_float($ensId) || is_numeric($ensId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ensId, true), gettype($ensId)), __LINE__);
        }
        if (is_null($ensId) || (is_array($ensId) && empty($ensId))) {
            unset($this->ensId);
        } else {
            $this->ensId = $ensId;
        }
        return $this;
    }
    /**
     * Get fin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFin()
    {
        return isset($this->fin) ? $this->fin : null;
    }
    /**
     * Set fin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fin
     * @return \bunge\StructType\RespPlateAuthContract
     */
    public function setFin($fin = null)
    {
        // validation for constraint: string
        if (!is_null($fin) && !is_string($fin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fin, true), gettype($fin)), __LINE__);
        }
        if (is_null($fin) || (is_array($fin) && empty($fin))) {
            unset($this->fin);
        } else {
            $this->fin = $fin;
        }
        return $this;
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $id
     * @return \bunge\StructType\RespPlateAuthContract
     */
    public function setId($id = null)
    {
        // validation for constraint: float
        if (!is_null($id) && !(is_float($id) || is_numeric($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        return $this;
    }
    /**
     * Get mcItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getMcItem()
    {
        return isset($this->mcItem) ? $this->mcItem : null;
    }
    /**
     * Set mcItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $mcItem
     * @return \bunge\StructType\RespPlateAuthContract
     */
    public function setMcItem($mcItem = null)
    {
        // validation for constraint: float
        if (!is_null($mcItem) && !(is_float($mcItem) || is_numeric($mcItem))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mcItem, true), gettype($mcItem)), __LINE__);
        }
        if (is_null($mcItem) || (is_array($mcItem) && empty($mcItem))) {
            unset($this->mcItem);
        } else {
            $this->mcItem = $mcItem;
        }
        return $this;
    }
    /**
     * Get mcNum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMcNum()
    {
        return isset($this->mcNum) ? $this->mcNum : null;
    }
    /**
     * Set mcNum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mcNum
     * @return \bunge\StructType\RespPlateAuthContract
     */
    public function setMcNum($mcNum = null)
    {
        // validation for constraint: string
        if (!is_null($mcNum) && !is_string($mcNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mcNum, true), gettype($mcNum)), __LINE__);
        }
        if (is_null($mcNum) || (is_array($mcNum) && empty($mcNum))) {
            unset($this->mcNum);
        } else {
            $this->mcNum = $mcNum;
        }
        return $this;
    }
    /**
     * Get order value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getOrder()
    {
        return isset($this->order) ? $this->order : null;
    }
    /**
     * Set order value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $order
     * @return \bunge\StructType\RespPlateAuthContract
     */
    public function setOrder($order = null)
    {
        // validation for constraint: float
        if (!is_null($order) && !(is_float($order) || is_numeric($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        if (is_null($order) || (is_array($order) && empty($order))) {
            unset($this->order);
        } else {
            $this->order = $order;
        }
        return $this;
    }
    /**
     * Get qty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getQty()
    {
        return isset($this->qty) ? $this->qty : null;
    }
    /**
     * Set qty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $qty
     * @return \bunge\StructType\RespPlateAuthContract
     */
    public function setQty($qty = null)
    {
        // validation for constraint: float
        if (!is_null($qty) && !(is_float($qty) || is_numeric($qty))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($qty, true), gettype($qty)), __LINE__);
        }
        if (is_null($qty) || (is_array($qty) && empty($qty))) {
            unset($this->qty);
        } else {
            $this->qty = $qty;
        }
        return $this;
    }
    /**
     * Get thirdCod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThirdCod()
    {
        return isset($this->thirdCod) ? $this->thirdCod : null;
    }
    /**
     * Set thirdCod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $thirdCod
     * @return \bunge\StructType\RespPlateAuthContract
     */
    public function setThirdCod($thirdCod = null)
    {
        // validation for constraint: string
        if (!is_null($thirdCod) && !is_string($thirdCod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thirdCod, true), gettype($thirdCod)), __LINE__);
        }
        if (is_null($thirdCod) || (is_array($thirdCod) && empty($thirdCod))) {
            unset($this->thirdCod);
        } else {
            $this->thirdCod = $thirdCod;
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
     * @return \bunge\StructType\RespPlateAuthContract
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
     * @return \bunge\StructType\RespPlateAuthContract
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
