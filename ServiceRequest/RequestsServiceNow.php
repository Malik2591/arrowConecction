<?php

class RequestsServiceNow {
    private $lob;        
    private $msgID;
    private $svcOrderReqNumber;
    private $svcOrderNumber;
    private $svcOrderReferenceNumber;
    private $svcOrderType;
    private $svcOrderPriority;
    private $svcOrderDeliveryType;
    private $specialInstructions;
    private $customerOrderIdentifier;
    private $customerName;
    private $customerContact;
    private $customerTelephone;
    private $customerEmail;
    private $customerCompanyBPID;
    private $employeeID;
    private $employeeType;
    private $addresses;
    private $organizationalUnit;
    private $shippingMethod;
    private $persona;
    private $profile;
    private $deviceTier; 
    private $deviceType; 
    private $kitProfile;
    private $imageType; 
    private $productID; 
    private $modeledAfter; 
    private $hdRetentionIndicator; 
    private $cidCoverage; 
    private $cidCaseIndicator;
    private $requestedDeliveryDate;
    private $returnItems; 
    private $custom; 
    private $updateDate; 
    private $updateReason; 



    
    public function __construct($requestData) {
                
        $this->setLob($requestData['lob']);
        $this->setMsgID($requestData['msgID']);
        $this->setSvcOrderReqNumber($requestData['svcOrderReqNumber']);
        $this->setSvcOrderNumber($requestData['svcOrderNumber']);
        $this->setSvcOrderReferenceNumber($requestData['svcOrderReferenceNumber']);
        $this->setSvcOrderType($requestData['svcOrderType']);
        $this->setSvcOrderPriority($requestData['svcOrderPriority']);
        $this->setSvcOrderDeliveryType($requestData['svcOrderDeliveryType']);
        $this->setSpecialInstructions($requestData['specialInstructions']);
        $this->setCustomerOrderIdentifier($requestData['customerOrderIdentifier']);
        $this->setCustomerName($requestData['customerName']);
        $this->setCustomerContact($requestData['customerContact']);
        $this->setCustomerTelephone($requestData['customerTelephone']);
        $this->setCustomerEmail($requestData['customerEmail;']);
        $this->setCustomerCompanyBPID($requestData['customerCompanyBPID']);
        $this->setEmployeeID($requestData['employeeID']);   
        $this->setEmployeeType($requestData['employeeType']);
        $this->setAddresses($requestData['addresses']);
        $this->setOrganizationalUnit($requestData['organizationalUnit']);
        $this->setShippingMethod($requestData['shippingMethod']);
        $this->setPersona($requestData['persona']);
        $this->setProfile($requestData['profile']);
        $this->setDeviceTier($requestData['deviceTier']);
        $this->setDeviceType($requestData['deviceType']);
        $this->setKitProfile($requestData['kitProfile']);
        $this->setImageType($requestData['imageType']);
        $this->setProductID($requestData['productID']);
        $this->setModeledAfter($requestData['modeledAfter']);
        $this->setHdRetentionIndicator($requestData['hdRetentionIndicator']);
        $this->setCidCoverage($requestData['cidCoverage']);
        $this->setCidCaseIndicator($requestData['cidCaseIndicator']);
        $this->setRequestedDeliveryDate($requestData['requestedDeliveryDate']);
        $this->setReturnItems($requestData['returnItems']);
        $this->setCustom($requestData['custom']);
        $this->setUpdateDate($requestData['updateDate']);
        $this->setUpdateReason($requestData['updateReason']);
    
      
    }


    // Getters
    public function getLob() {
        return $this->lob;
    }
    public function getMsgID() {
        return $this->msgID;
    }
    public function getSvcOrderReqNumber() {
        return $this->svcOrderReqNumber;
    }
    public function getSvcOrderNumber() {
        return $this->svcOrderNumber;
    }
    public function getSvcOrderReferenceNumber() {
        return $this->svcOrderReferenceNumber;
    }
    public function getSvcOrderType() {
        return $this->svcOrderType;
    }
    public function getSvcOrderPriority() {
        return $this->svcOrderPriority;
    }
    public function getSvcOrderDeliveryType() {
        return $this->svcOrderDeliveryType;
    }
    public function getSpecialInstructions() {
        return $this->specialInstructions;
    }
    public function getCustomerOrderIdentifier() {
        return $this->customerOrderIdentifier;
    }
    public function getCustomerName() {
        return $this->customerName;
    }
    public function getCustomerContact() {
        return $this->customerContact;
    }
    public function getCustomerTelephone() {
        return $this->customerTelephone;
    }
    public function getCustomerEmail() {
        return $this->customerEmail;
    }
    public function getCustomerCompanyBPID() {
        return $this->customerCompanyBPID;
    }
    public function getEmployeeID() {
        return $this->employeeID;
    }
    public function getEmployeeType() {
        return $this->employeeType;
    }
    public function getAddresses() {
        return $this->addresses;
    }
    public function getOrganizationalUnit() {
        return $this->organizationalUnit;
    }
    public function getShippingMethod() {
        return $this->shippingMethod;
    }
    public function getPersona() {
        return $this->persona;
    }
    public function getProfile() {
        return $this->profile;
    }
    public function getDeviceTier() {
        return $this->deviceTier;
    }
    public function getDeviceType() {
        return $this->deviceType;
    }
    public function getKitProfile() {
        return $this->kitProfile;
    }
    public function getImageType() {
        return $this->imageType;
    }
    public function getProductID() {
        return $this->productID;
    }
    public function getModeledAfter() {
        return $this->modeledAfter;
    }
    public function getHdRetentionIndicator() {
        return $this->hdRetentionIndicator;
    }
    public function getCidCoverage() {
        return $this->cidCoverage;
    }
    public function getCidCaseIndicator() {
        return $this->cidCaseIndicator;
    }
    public function getRequestedDeliveryDate() {
        return $this->requestedDeliveryDate;
    }
    public function getReturnItems() {
        return $this->returnItems;
    }
    public function getCustom() {
        return $this->custom;
    }
    public function getUpdateDate() {
        return $this->updateDate;
    }
    public function getUpdateReason() {
        return $this->updateReason;
    }
    


    // Setters
    
    public function setLob($lob) {
        $this->lob = $lob;
    }
    public function setMsgID($msgID) {
        $this->msgID = $msgID;
    }
    public function setSvcOrderReqNumber($svcOrderReqNumber) {
        $this->svcOrderReqNumber = $svcOrderReqNumber;
    }
    public function setSvcOrderNumber($svcOrderNumber) {
        $this->svcOrderNumber = $svcOrderNumber;
    }
    public function setSvcOrderReferenceNumber($svcOrderReferenceNumber) {
        $this->svcOrderReferenceNumber = $svcOrderReferenceNumber;
    }
    public function setSvcOrderType($svcOrderType) {
        $this->svcOrderType = $svcOrderType;
    }
    public function setSvcOrderPriority($svcOrderPriority) {
        $this->svcOrderPriority = $svcOrderPriority;
    }
    public function setSvcOrderDeliveryType($svcOrderDeliveryType) {
        $this->svcOrderDeliveryType = $svcOrderDeliveryType;
    }
    public function setSpecialInstructions($specialInstructions) {
        $this->specialInstructions = $specialInstructions;
    }
    public function setCustomerOrderIdentifier($customerOrderIdentifier) {
        $this->customerOrderIdentifier = $customerOrderIdentifier;
    }
    public function setCustomerName($customerName) {
        $this->customerName = $customerName;
    }
    public function setCustomerContact($customerContact) {
        $this->customerContact = $customerContact;
    }
    public function setCustomerTelephone($customerTelephone) {
        $this->customerTelephone = $customerTelephone;
    }
    public function setCustomerEmail($customerEmail) {
        $this->customerEmail = $customerEmail;
    }                        
    public function setCustomerCompanyBPID($customerCompanyBPID) {
        $this->customerCompanyBPID = $customerCompanyBPID;
    }
    public function setEmployeeID($employeeID) {
        $this->employeeID = $employeeID;
    }
    public function setEmployeeType($employeeType) {
        $this->employeeType = $employeeType;
    }
    public function setAddresses($addresses) {
        $this->addresses = $addresses;
    }
    public function setOrganizationalUnit($organizationalUnit) {
        $this->organizationalUnit = $organizationalUnit;
    }
    public function setShippingMethod($shippingMethod) {
        $this->shippingMethod = $shippingMethod;
    }
    public function setPersona($persona) {
        $this->persona = $persona;
    }
    public function setProfile($profile) {
        $this->profile = $profile;
    }
    public function setDeviceTier($deviceTier) {
        $this->deviceTier = $deviceTier;
    }
    public function setDeviceType($deviceType) {
        $this->deviceType = $deviceType;
    }
    public function setKitProfile($kitProfile) {
        $this->kitProfile = $kitProfile;
    }
    public function setImageType($imageType) {
        $this->imageType = $imageType;
    }
    public function setProductID($productID) {
        $this->productID = $productID;
    }
    public function setModeledAfter($modeledAfter) {
        $this->modeledAfter = $modeledAfter;
    }
    public function setHdRetentionIndicator($hdRetentionIndicator) {
        $this->hdRetentionIndicator = $hdRetentionIndicator;
    }
    public function setCidCoverage($cidCoverage) {
        $this->cidCoverage = $cidCoverage;
    }
    public function setCidCaseIndicator($cidCaseIndicator) {
        $this->cidCaseIndicator = $cidCaseIndicator;
    }
    public function setRequestedDeliveryDate($requestedDeliveryDate) {
        $this->requestedDeliveryDate = $requestedDeliveryDate;
    }
    public function setReturnItems($returnItems) {
        $this->returnItems = $returnItems;
    }
    public function setCustom($custom) {
        $this->custom = $custom;
    }
    public function setUpdateDate($updateDate) {
        $this->updateDate = $updateDate;
    }   
    
    public function setUpdateReason($updateReason) {
        $this->updateReason = $updateReason;
    } 
    
}
