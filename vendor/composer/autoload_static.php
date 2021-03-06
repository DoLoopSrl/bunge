<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32fe93f4ed4372f36ef98e0fc8b2e9e0
{
    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'bunge\\' => 6,
        ),
        'W' => 
        array (
            'WsdlToPhp\\PackageBase\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'bunge\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'WsdlToPhp\\PackageBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WsdlToPhp\\PackageBase\\AbstractSoapClientBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractSoapClientBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructArrayBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructArrayBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructEnumBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructEnumBase.php',
        'WsdlToPhp\\PackageBase\\SoapClientInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/SoapClientInterface.php',
        'WsdlToPhp\\PackageBase\\StructArrayInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructArrayInterface.php',
        'WsdlToPhp\\PackageBase\\StructEnumInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructEnumInterface.php',
        'WsdlToPhp\\PackageBase\\StructInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructInterface.php',
        'WsdlToPhp\\PackageBase\\Utils' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/Utils.php',
        'bunge\\ClassMap' => __DIR__ . '/../..' . '/src/ClassMap.php',
        'bunge\\ServiceType\\Insert' => __DIR__ . '/../..' . '/src/ServiceType/Insert.php',
        'bunge\\ServiceType\\Query' => __DIR__ . '/../..' . '/src/ServiceType/Query.php',
        'bunge\\ServiceType\\Update' => __DIR__ . '/../..' . '/src/ServiceType/Update.php',
        'bunge\\StructType\\InsertPlateAuthorization' => __DIR__ . '/../..' . '/src/StructType/InsertPlateAuthorization.php',
        'bunge\\StructType\\InsertPlateAuthorizationResponse' => __DIR__ . '/../..' . '/src/StructType/InsertPlateAuthorizationResponse.php',
        'bunge\\StructType\\QueryPlateAuthorization' => __DIR__ . '/../..' . '/src/StructType/QueryPlateAuthorization.php',
        'bunge\\StructType\\QueryPlateAuthorizationResponse' => __DIR__ . '/../..' . '/src/StructType/QueryPlateAuthorizationResponse.php',
        'bunge\\StructType\\QueryProduct' => __DIR__ . '/../..' . '/src/StructType/QueryProduct.php',
        'bunge\\StructType\\QueryProductResponse' => __DIR__ . '/../..' . '/src/StructType/QueryProductResponse.php',
        'bunge\\StructType\\RespGetInfoOrders' => __DIR__ . '/../..' . '/src/StructType/RespGetInfoOrders.php',
        'bunge\\StructType\\RespGetInfoOrdersWaybillNotes' => __DIR__ . '/../..' . '/src/StructType/RespGetInfoOrdersWaybillNotes.php',
        'bunge\\StructType\\RespPlateAuth' => __DIR__ . '/../..' . '/src/StructType/RespPlateAuth.php',
        'bunge\\StructType\\RespPlateAuthContract' => __DIR__ . '/../..' . '/src/StructType/RespPlateAuthContract.php',
        'bunge\\StructType\\RespPlateAuthDetail' => __DIR__ . '/../..' . '/src/StructType/RespPlateAuthDetail.php',
        'bunge\\StructType\\RespPlateAuthStockTransferOrder' => __DIR__ . '/../..' . '/src/StructType/RespPlateAuthStockTransferOrder.php',
        'bunge\\StructType\\RespPlateAuthTransporter' => __DIR__ . '/../..' . '/src/StructType/RespPlateAuthTransporter.php',
        'bunge\\StructType\\RespProduct' => __DIR__ . '/../..' . '/src/StructType/RespProduct.php',
        'bunge\\StructType\\UpdatePlateAuthorization' => __DIR__ . '/../..' . '/src/StructType/UpdatePlateAuthorization.php',
        'bunge\\StructType\\UpdatePlateAuthorizationResponse' => __DIR__ . '/../..' . '/src/StructType/UpdatePlateAuthorizationResponse.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32fe93f4ed4372f36ef98e0fc8b2e9e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32fe93f4ed4372f36ef98e0fc8b2e9e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32fe93f4ed4372f36ef98e0fc8b2e9e0::$classMap;

        }, null, ClassLoader::class);
    }
}
