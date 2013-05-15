<?php

define("COINBASE_API_KEY","70dc75ee39a7e70258eb83c6ceda80a1cc1d6400affd02aa3feb97c704568402");

function coinbase_query($url,$request_arguments,$method)
{

//If the method is GET , embed the arguments into the URL 
if ( $method == "GET" or $method == "get" )
{
$url_string = "?";

	foreach ( $request_arguments as $tag_name => $tag_value )
	{
	$url_string = $url_string."$tag_name=$tag_value";
	$url_string = $url_string."&";
	}
$url = $url.$url_string;
$url = rtrim($url,'&');
}


//set Curl settings
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,  2);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_CAINFO, getcwd(). "/cacert.pem");



//If the Method is POST , embed the variables in a json array , and send it in a POST request 
if ( $method == "POST" or $method == "post" )
{
$content = json_encode($request_arguments);
curl_setopt($curl, CURLOPT_HTTPHEADER,array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
}

//run cURL
$json_response = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
if ( $status != 200 && $status != 201 ) {
    die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
    }
curl_close($curl);

//decode response
$response = json_decode($json_response, true);
return $response;
}

?>