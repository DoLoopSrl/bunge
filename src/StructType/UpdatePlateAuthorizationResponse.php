<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePlateAuthorizationResponse StructType
 * @subpackage Structs
 */
class UpdatePlateAuthorizationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \bunge\StructType\RespPlateAuth
     */
    public $return;
    /**
     * Constructor method for updatePlateAuthorizationResponse
     * @uses UpdatePlateAuthorizationResponse::setReturn()
     * @param \bunge\StructType\RespPlateAuth $return
     */
    public function __construct(\bunge\StructType\RespPlateAuth $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \bunge\StructType\RespPlateAuth|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }
    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \bunge\StructType\RespPlateAuth $return
     * @return \bunge\StructType\UpdatePlateAuthorizationResponse
     */
    public function setReturn(\bunge\StructType\RespPlateAuth $return = null)
    {
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
        }
        return $this;
    }
}
