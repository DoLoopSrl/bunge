<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for queryProductResponse StructType
 * @subpackage Structs
 */
class QueryProductResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \bunge\StructType\RespProduct[]
     */
    public $return;
    /**
     * Constructor method for queryProductResponse
     * @uses QueryProductResponse::setReturn()
     * @param \bunge\StructType\RespProduct[] $return
     */
    public function __construct(array $return = array())
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \bunge\StructType\RespProduct[]|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }
    /**
     * This method is responsible for validating the values passed to the setReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReturnForArrayConstraintsFromSetReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $queryProductResponseReturnItem) {
            // validation for constraint: itemType
            if (!$queryProductResponseReturnItem instanceof \bunge\StructType\RespProduct) {
                $invalidValues[] = is_object($queryProductResponseReturnItem) ? get_class($queryProductResponseReturnItem) : sprintf('%s(%s)', gettype($queryProductResponseReturnItem), var_export($queryProductResponseReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The return property can only contain items of type \bunge\StructType\RespProduct, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \bunge\StructType\RespProduct[] $return
     * @return \bunge\StructType\QueryProductResponse
     */
    public function setReturn(array $return = array())
    {
        // validation for constraint: array
        if ('' !== ($returnArrayErrorMessage = self::validateReturnForArrayConstraintsFromSetReturn($return))) {
            throw new \InvalidArgumentException($returnArrayErrorMessage, __LINE__);
        }
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
        }
        return $this;
    }
    /**
     * Add item to return value
     * @throws \InvalidArgumentException
     * @param \bunge\StructType\RespProduct $item
     * @return \bunge\StructType\QueryProductResponse
     */
    public function addToReturn(\bunge\StructType\RespProduct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \bunge\StructType\RespProduct) {
            throw new \InvalidArgumentException(sprintf('The return property can only contain items of type \bunge\StructType\RespProduct, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->return[] = $item;
        return $this;
    }
}
