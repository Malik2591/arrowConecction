<?php

/**
 * Autor: Fernando  Reyes
 * Funcion para consumo del api msp v3 */
function CallAPIMSPV3($method, $url, $data = false, $ssl = true, $parseVars = true)
{
	$curl = curl_init();
	switch ($method) {
		case "POST":
			curl_setopt($curl, CURLOPT_POST, 1);
			if ($data)
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			break;
		case "PUT":
			curl_setopt($curl, CURLOPT_PUT, 1);
			break;
		default:
			if ($data)

				$url = sprintf("%s?%s", $url, "input_data=" . urlencode($data));
	}

	//log_registro_peticiones ( $url );
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/json",
		"authtoken:479AE5FF-D8DE-482C-A56C-03D19D06486B"

	));

	/**Log*/

	if (!$result = curl_exec($curl))
		return curl_error($curl);
	/* 	echo "<pre>";
	echo "Ruta:" . $url . "<br>";
	echo "Metodo:" . $method . "<br>";
	echo "Datos:" . $data . "<br>";
	echo "Resultado:" . $result . "<br>";
	echo "</pre>"; */
	$data = json_decode($result);
	if ($data == NULL)
		return $result;
	curl_close($curl);

	return $data;
}
