<?php

namespace bunge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named updatePlateAuthorization
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \bunge\StructType\UpdatePlateAuthorization $parameters
     * @return \bunge\StructType\UpdatePlateAuthorizationResponse|bool
     */
    public function updatePlateAuthorization(\bunge\StructType\UpdatePlateAuthorization $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('updatePlateAuthorization', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \bunge\StructType\UpdatePlateAuthorizationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
