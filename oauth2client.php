<?php
 

define("CALLBACK_URL", "http://localhost/oauth2client.php");
define("AUTH_URL", "https://example.com/oauth2/authorize");
define("ACCESS_TOKEN_URL", "https://example/oauth2/token");
define("CLIENT_ID", "1yLCsmAfDF49nGmJLgDbHvB6bSca");
define("CLIENT_SECRET", "g2OKQ9isj2pcaextQdjx5xW3KoAa");
define("SCOPE", ""); // optional

$url = AUTH_URL . "?"
    . "response_type=code"
    . "&client_id=" . urlencode(CLIENT_ID)
    . "&scope=" . urlencode(SCOPE)
    . "&redirect_uri=" . urlencode(CALLBACK_URL);

getToken();
function getToken()
{
    $curl = curl_init();
    $code = $_GET['code'];
    $params = array(
        CURLOPT_URL =>  ACCESS_TOKEN_URL . "?"
            . "code=" . $code
            . "&grant_type=authorization_code"
            . "&client_id=" . CLIENT_ID
            . "&client_secret=" . CLIENT_SECRET
            . "&redirect_uri=" . CALLBACK_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_NOBODY => false,
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
            "accept: *",
            "accept-encoding: gzip, deflate",
        ),
    );

    curl_setopt_array($curl, $params);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #01: " . $err;
    } else {
        $response = json_decode($response, true);
        if (array_key_exists("access_token", $response)) return $response;
        if (array_key_exists("error", $response)) echo $response["error_description"];
        echo "cURL Error #02: Something went wrong! Please contact admin.";
    }
}
