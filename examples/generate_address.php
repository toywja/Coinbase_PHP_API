<?php
require "coinbase_api.php";


  $request_arguments = array(
    'api_key' => COINBASE_API_KEY,
  ); 

$new_address_array = coinbase_query("https://coinbase.com/api/v1/account/generate_receive_address",$request_arguments,"POST");
$new_address = $new_address_array["address"];
echo $new_address ;
?>