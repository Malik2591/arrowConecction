<?php

class Addresses {
    private $street;
    private $city;
    private $state;
    private $country;
    private $postalCode;

    public function __construct($addressData) {
        $this->getStreet($addressData['street']);
        $this->getCity($addressData['city']);
        $this->getState($addressData['state']);
        $this->getCountry($addressData['country']);
        $this->getPostalCode($addressData['postalCode']);
    }

    // Getters
    public function getStreet() {
        return $this->street;
    }

    public function getCity() {
        return $this->city;
    }

    public function getState() {
        return $this->state;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    // Setters
    public function setStreet($street) {
        $this->street = $street;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
    }
}
?>