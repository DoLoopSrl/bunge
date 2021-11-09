<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'WsPlateAuthorizationsSagem.xml',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'WsPlateAuthorizationsSagem.xml',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \bunge\ClassMap::get(),
);
/**
 * Samples for Query ServiceType
 */
$query = new \bunge\ServiceType\Query($options);
/**
 * Sample call for queryProduct operation/method
 */
if ($query->queryProduct(new \bunge\StructType\QueryProduct()) !== false) {
    print_r($query->getResult());
} else {
    print_r($query->getLastError());
}
/**
 * Sample call for queryPlateAuthorization operation/method
 */
if ($query->queryPlateAuthorization(new \bunge\StructType\QueryPlateAuthorization()) !== false) {
    print_r($query->getResult());
} else {
    print_r($query->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \bunge\ServiceType\Update($options);
/**
 * Sample call for updatePlateAuthorization operation/method
 */
if ($update->updatePlateAuthorization(new \bunge\StructType\UpdatePlateAuthorization()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Insert ServiceType
 */
$insert = new \bunge\ServiceType\Insert($options);
/**
 * Sample call for insertPlateAuthorization operation/method
 */
if ($insert->insertPlateAuthorization(new \bunge\StructType\InsertPlateAuthorization()) !== false) {
    print_r($insert->getResult());
} else {
    print_r($insert->getLastError());
}
