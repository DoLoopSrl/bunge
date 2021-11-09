<?php

namespace bunge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Insert ServiceType
 * @subpackage Services
 */
class Insert extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named insertPlateAuthorization
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \bunge\StructType\InsertPlateAuthorization $parameters
     * @return \bunge\StructType\InsertPlateAuthorizationResponse|bool
     */
    public function insertPlateAuthorization(\bunge\StructType\InsertPlateAuthorization $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('insertPlateAuthorization', array(
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
     * @return \bunge\StructType\InsertPlateAuthorizationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
