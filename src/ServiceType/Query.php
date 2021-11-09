<?php

namespace bunge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Query ServiceType
 * @subpackage Services
 */
class Query extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named queryProduct
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \bunge\StructType\QueryProduct $parameters
     * @return \bunge\StructType\QueryProductResponse|bool
     */
    public function queryProduct(\bunge\StructType\QueryProduct $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('queryProduct', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named queryPlateAuthorization
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \bunge\StructType\QueryPlateAuthorization $parameters
     * @return \bunge\StructType\QueryPlateAuthorizationResponse|bool
     */
    public function queryPlateAuthorization(\bunge\StructType\QueryPlateAuthorization $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('queryPlateAuthorization', array(
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
     * @return \bunge\StructType\QueryPlateAuthorizationResponse|\bunge\StructType\QueryProductResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
