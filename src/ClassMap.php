<?php

namespace bunge;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'RespPlateAuthTransporter' => '\\bunge\\StructType\\RespPlateAuthTransporter',
            'RespPlateAuthContract' => '\\bunge\\StructType\\RespPlateAuthContract',
            'RespPlateAuthStockTransferOrder' => '\\bunge\\StructType\\RespPlateAuthStockTransferOrder',
            'RespPlateAuth' => '\\bunge\\StructType\\RespPlateAuth',
            'RespPlateAuthDetail' => '\\bunge\\StructType\\RespPlateAuthDetail',
            'RespGetInfoOrders' => '\\bunge\\StructType\\RespGetInfoOrders',
            'RespGetInfoOrdersWaybillNotes' => '\\bunge\\StructType\\RespGetInfoOrdersWaybillNotes',
            'RespProduct' => '\\bunge\\StructType\\RespProduct',
            'updatePlateAuthorization' => '\\bunge\\StructType\\UpdatePlateAuthorization',
            'updatePlateAuthorizationResponse' => '\\bunge\\StructType\\UpdatePlateAuthorizationResponse',
            'queryProduct' => '\\bunge\\StructType\\QueryProduct',
            'queryProductResponse' => '\\bunge\\StructType\\QueryProductResponse',
            'queryPlateAuthorization' => '\\bunge\\StructType\\QueryPlateAuthorization',
            'queryPlateAuthorizationResponse' => '\\bunge\\StructType\\QueryPlateAuthorizationResponse',
            'insertPlateAuthorization' => '\\bunge\\StructType\\InsertPlateAuthorization',
            'insertPlateAuthorizationResponse' => '\\bunge\\StructType\\InsertPlateAuthorizationResponse',
        );
    }
}
