<?php
class Addresses {
    private $itemType;
    private $temSerialNumber;
    private $itemAssetTag;

    public function __construct($addressData) {

        $this->getItemType($addressData['itemType']);
        $this->getTemSerialNumber($addressData['temSerialNumber']);
        $this->getItemAssetTag($addressData['itemAssetTag']);
    }

    // Getters
    public function getItemType() {
        return $this->itemType;
    }

    public function getTemSerialNumber() {
        return $this->temSerialNumber;
    }

    public function getItemAssetTag() {
        return $this->itemAssetTag;
    }

    // Setters
    public function setItemType($itemType) {
        $this->itemType = $itemType;
    }

    public function setTemSerialNumber($temSerialNumber) {
        $this->temSerialNumber = $temSerialNumber;
    }

    public function setItemAssetTag($itemAssetTag) {
        $this->itemAssetTag = $itemAssetTag;
        }
    }
