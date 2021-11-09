<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespPlateAuth StructType
 * @subpackage Structs
 */
class RespPlateAuth extends AbstractStructBase
{
    /**
     * The listAuthorizations
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \bunge\StructType\RespPlateAuthDetail[]
     */
    public $listAuthorizations;
    /**
     * The mssg
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $mssg;
    /**
     * Constructor method for RespPlateAuth
     * @uses RespPlateAuth::setListAuthorizations()
     * @uses RespPlateAuth::setMssg()
     * @param \bunge\StructType\RespPlateAuthDetail[] $listAuthorizations
     * @param string $mssg
     */
    public function __construct(array $listAuthorizations = array(), $mssg = null)
    {
        $this
            ->setListAuthorizations($listAuthorizations)
            ->setMssg($mssg);
    }
    /**
     * Get listAuthorizations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \bunge\StructType\RespPlateAuthDetail[]|null
     */
    public function getListAuthorizations()
    {
        return isset($this->listAuthorizations) ? $this->listAuthorizations : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListAuthorizations method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListAuthorizations method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListAuthorizationsForArrayConstraintsFromSetListAuthorizations(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respPlateAuthListAuthorizationsItem) {
            // validation for constraint: itemType
            if (!$respPlateAuthListAuthorizationsItem instanceof \bunge\StructType\RespPlateAuthDetail) {
                $invalidValues[] = is_object($respPlateAuthListAuthorizationsItem) ? get_class($respPlateAuthListAuthorizationsItem) : sprintf('%s(%s)', gettype($respPlateAuthListAuthorizationsItem), var_export($respPlateAuthListAuthorizationsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listAuthorizations property can only contain items of type \bunge\StructType\RespPlateAuthDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set listAuthorizations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \bunge\StructType\RespPlateAuthDetail[] $listAuthorizations
     * @return \bunge\StructType\RespPlateAuth
     */
    public function setListAuthorizations(array $listAuthorizations = array())
    {
        // validation for constraint: array
        if ('' !== ($listAuthorizationsArrayErrorMessage = self::validateListAuthorizationsForArrayConstraintsFromSetListAuthorizations($listAuthorizations))) {
            throw new \InvalidArgumentException($listAuthorizationsArrayErrorMessage, __LINE__);
        }
        if (is_null($listAuthorizations) || (is_array($listAuthorizations) && empty($listAuthorizations))) {
            unset($this->listAuthorizations);
        } else {
            $this->listAuthorizations = $listAuthorizations;
        }
        return $this;
    }
    /**
     * Add item to listAuthorizations value
     * @throws \InvalidArgumentException
     * @param \bunge\StructType\RespPlateAuthDetail $item
     * @return \bunge\StructType\RespPlateAuth
     */
    public function addToListAuthorizations(\bunge\StructType\RespPlateAuthDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \bunge\StructType\RespPlateAuthDetail) {
            throw new \InvalidArgumentException(sprintf('The listAuthorizations property can only contain items of type \bunge\StructType\RespPlateAuthDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listAuthorizations[] = $item;
        return $this;
    }
    /**
     * Get mssg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMssg()
    {
        return isset($this->mssg) ? $this->mssg : null;
    }
    /**
     * Set mssg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mssg
     * @return \bunge\StructType\RespPlateAuth
     */
    public function setMssg($mssg = null)
    {
        // validation for constraint: string
        if (!is_null($mssg) && !is_string($mssg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mssg, true), gettype($mssg)), __LINE__);
        }
        if (is_null($mssg) || (is_array($mssg) && empty($mssg))) {
            unset($this->mssg);
        } else {
            $this->mssg = $mssg;
        }
        return $this;
    }
}
