<?php

class RequestsServiceNow {
    private $svcOrderPriority; // Prioridad del pedido de servicio
    private $customerName; // Nombre del cliente
    private $customerContact; // Información de contacto del cliente
    private $customerTelephone; // Número de teléfono del cliente
    private $customerEmail; // Dirección de correo electrónico del cliente
    private $employeeID; // ID del empleado
    private $employeeType; // Tipo de empleado
    private $addresses; // Direcciones relacionadas con la solicitud de servicio
    private $organizationalUnit; // Unidad organizativa
    private $shippingMethod; // Método de envío
    private $persona; // Persona
    private $profile; // Perfil
    private $deviceTier; // Nivel de dispositivo
    private $deviceType; // Tipo de dispositivo
    private $kitProfile; // Perfil del kit
    private $imageType; // Tipo de imagen
    private $productID; // ID del producto
    private $modeledAfter; // Modelado después de
    private $hdRetentionIndicator; // Indicador de retención de HD
    private $cidCoverage; // Cobertura CID
    private $cidCaseIndicator; // Indicador de caso CID
    private $requestedDeliveryDate; // Fecha de entrega solicitada
    private $returnItems; // Artículos de devolución
    private $custom; // Personalizado
    private $updateDate; // Fecha de actualización
    private $updateReason; // Motivo de actualización


    public function __construct($requestData) {
 
        $this->svcOrderPriority = $requestData['svcOrderPriority'];
        $this->customerName = $requestData['customerName'];
        $this->customerContact = $requestData['customerContact'];
        $this->customerTelephone = $requestData['customerTelephone'];
        $this->customerEmail = $requestData['customerEmail'];
        $this->employeeID = $requestData['employeeID'];
        $this->employeeType = $requestData['employeeType'];
        $this->addresses = $requestData['addresses'];
        $this->organizationalUnit = $requestData['organizationalUnit'];
        $this->shippingMethod =$requestData['shippingMethod'];
        $this->persona =$requestData['persona'];
        $this->profile =$requestData['profile'];
        $this->deviceTier =$requestData['deviceTier'];
        $this->deviceType = $requestData['deviceType'];
        $this->kitProfile =$requestData['kitProfile'];
        $this->imageType = $requestData['imageType'];
        $this->productID = $requestData['productID'];
        $this->modeledAfter = $requestData['modeledAfter'];
        $this->hdRetentionIndicator = $requestData['hdRetentionIndicator'];
        $this->cidCoverage = $requestData['$cidCoverage'];
        $this->cidCaseIndicator = $requestData['cidCaseIndicator'];
        $this->requestedDeliveryDate = $requestData['requestedDeliveryDate'];
        $this->returnItems = $requestData['returnItems'];
        $this->custom = $requestData['custom'];
        $this->updateDate = $requestData['updateDate'];
        $this->updateReason = $requestData['updateReason'];
    }

    // Getters
    public function getSvcOrderPriority() {
        return $this->svcOrderPriority;
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

    public function getEmployeeID() {
        return $this->employeeID;
    }

    public function getEmployeeType() {
        return $this->employeeType;
    }

    public function getAddresses() {
        return $this->addresses;
    }

    // Setters
    public function setSvcOrderPriority($svcOrderPriority) {
        $this->svcOrderPriority = $svcOrderPriority;
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

    public function setEmployeeID($employeeID) {
        $this->employeeID = $employeeID;
    }

    public function setEmployeeType($employeeType) {
        $this->employeeType = $employeeType;
    }

    public function setAddresses($addresses) {
        $this->addresses = $addresses;
    }
}


?>