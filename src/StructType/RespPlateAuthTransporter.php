<?php

namespace bunge\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespPlateAuthTransporter StructType
 * @subpackage Structs
 */
class RespPlateAuthTransporter extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $code;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The countryDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $countryDesc;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The province
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $province;
    /**
     * The provinceDsc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $provinceDsc;
    /**
     * The vat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $vat;
    /**
     * The vatCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $vatCountry;
    /**
     * The vatCountryDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $vatCountryDesc;
    /**
     * Constructor method for RespPlateAuthTransporter
     * @uses RespPlateAuthTransporter::setAddress()
     * @uses RespPlateAuthTransporter::setCity()
     * @uses RespPlateAuthTransporter::setCode()
     * @uses RespPlateAuthTransporter::setCountry()
     * @uses RespPlateAuthTransporter::setCountryDesc()
     * @uses RespPlateAuthTransporter::setName()
     * @uses RespPlateAuthTransporter::setProvince()
     * @uses RespPlateAuthTransporter::setProvinceDsc()
     * @uses RespPlateAuthTransporter::setVat()
     * @uses RespPlateAuthTransporter::setVatCountry()
     * @uses RespPlateAuthTransporter::setVatCountryDesc()
     * @param string $address
     * @param string $city
     * @param string $code
     * @param string $country
     * @param string $countryDesc
     * @param string $name
     * @param string $province
     * @param string $provinceDsc
     * @param string $vat
     * @param string $vatCountry
     * @param string $vatCountryDesc
     */
    public function __construct($address = null, $city = null, $code = null, $country = null, $countryDesc = null, $name = null, $province = null, $provinceDsc = null, $vat = null, $vatCountry = null, $vatCountryDesc = null)
    {
        $this
            ->setAddress($address)
            ->setCity($city)
            ->setCode($code)
            ->setCountry($country)
            ->setCountryDesc($countryDesc)
            ->setName($name)
            ->setProvince($province)
            ->setProvinceDsc($provinceDsc)
            ->setVat($vat)
            ->setVatCountry($vatCountry)
            ->setVatCountryDesc($vatCountryDesc);
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
        }
        return $this;
    }
    /**
     * Get city value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity()
    {
        return isset($this->city) ? $this->city : null;
    }
    /**
     * Set city value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->city);
        } else {
            $this->city = $city;
        }
        return $this;
    }
    /**
     * Get code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : null;
    }
    /**
     * Set code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->code);
        } else {
            $this->code = $code;
        }
        return $this;
    }
    /**
     * Get country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry()
    {
        return isset($this->country) ? $this->country : null;
    }
    /**
     * Set country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->country);
        } else {
            $this->country = $country;
        }
        return $this;
    }
    /**
     * Get countryDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryDesc()
    {
        return isset($this->countryDesc) ? $this->countryDesc : null;
    }
    /**
     * Set countryDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryDesc
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setCountryDesc($countryDesc = null)
    {
        // validation for constraint: string
        if (!is_null($countryDesc) && !is_string($countryDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryDesc, true), gettype($countryDesc)), __LINE__);
        }
        if (is_null($countryDesc) || (is_array($countryDesc) && empty($countryDesc))) {
            unset($this->countryDesc);
        } else {
            $this->countryDesc = $countryDesc;
        }
        return $this;
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        return $this;
    }
    /**
     * Get province value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProvince()
    {
        return isset($this->province) ? $this->province : null;
    }
    /**
     * Set province value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $province
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($province, true), gettype($province)), __LINE__);
        }
        if (is_null($province) || (is_array($province) && empty($province))) {
            unset($this->province);
        } else {
            $this->province = $province;
        }
        return $this;
    }
    /**
     * Get provinceDsc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProvinceDsc()
    {
        return isset($this->provinceDsc) ? $this->provinceDsc : null;
    }
    /**
     * Set provinceDsc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $provinceDsc
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setProvinceDsc($provinceDsc = null)
    {
        // validation for constraint: string
        if (!is_null($provinceDsc) && !is_string($provinceDsc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provinceDsc, true), gettype($provinceDsc)), __LINE__);
        }
        if (is_null($provinceDsc) || (is_array($provinceDsc) && empty($provinceDsc))) {
            unset($this->provinceDsc);
        } else {
            $this->provinceDsc = $provinceDsc;
        }
        return $this;
    }
    /**
     * Get vat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVat()
    {
        return isset($this->vat) ? $this->vat : null;
    }
    /**
     * Set vat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vat
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setVat($vat = null)
    {
        // validation for constraint: string
        if (!is_null($vat) && !is_string($vat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vat, true), gettype($vat)), __LINE__);
        }
        if (is_null($vat) || (is_array($vat) && empty($vat))) {
            unset($this->vat);
        } else {
            $this->vat = $vat;
        }
        return $this;
    }
    /**
     * Get vatCountry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVatCountry()
    {
        return isset($this->vatCountry) ? $this->vatCountry : null;
    }
    /**
     * Set vatCountry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vatCountry
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setVatCountry($vatCountry = null)
    {
        // validation for constraint: string
        if (!is_null($vatCountry) && !is_string($vatCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCountry, true), gettype($vatCountry)), __LINE__);
        }
        if (is_null($vatCountry) || (is_array($vatCountry) && empty($vatCountry))) {
            unset($this->vatCountry);
        } else {
            $this->vatCountry = $vatCountry;
        }
        return $this;
    }
    /**
     * Get vatCountryDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVatCountryDesc()
    {
        return isset($this->vatCountryDesc) ? $this->vatCountryDesc : null;
    }
    /**
     * Set vatCountryDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vatCountryDesc
     * @return \bunge\StructType\RespPlateAuthTransporter
     */
    public function setVatCountryDesc($vatCountryDesc = null)
    {
        // validation for constraint: string
        if (!is_null($vatCountryDesc) && !is_string($vatCountryDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCountryDesc, true), gettype($vatCountryDesc)), __LINE__);
        }
        if (is_null($vatCountryDesc) || (is_array($vatCountryDesc) && empty($vatCountryDesc))) {
            unset($this->vatCountryDesc);
        } else {
            $this->vatCountryDesc = $vatCountryDesc;
        }
        return $this;
    }
}
