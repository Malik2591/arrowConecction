<?php

/*  Autor: Lozano Avila Alan Eduardo
 Feche: 03 de agosto de 2023 */


include_once 'RequestsServiceNow.php';

$requestData = $_POST;

$objetoDTO = new RequestsServiceNow($requestData);
