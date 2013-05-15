<?php
require "coinbase_api.php";


  $request_arguments =  array(
  "button" => array(
  "name" => "test",
  "price_string" => "5.00",
  "price_currency_iso" => "USD",
  "custom" => "Order123",
  "description" => "Sample description",
  "type" => "buy_now",
  "style" => "custom_large",
  'api_key' => COINBASE_API_KEY,
  )); 

$new_button_array = coinbase_query("https://coinbase.com/api/v1/buttons",$request_arguments,"POST");
print_r($new_button_array);
