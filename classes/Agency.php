<?php

class Agency
{

    public string $name;
    public string $address;
    public string $zipcode;
    public string $city;
    public string $restaurationType;

    public function __construct($name, $address, $zipcode, $city, $restaurationType)
    {
        $this->name = $name;
        $this->address = $address;
        $this->zipcode = $zipcode;
        $this->city = $city;
        $this->restaurationType = $restaurationType;
    }
}
