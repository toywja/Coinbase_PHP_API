<?php

require "coinbase_api.php";

/*
This example allows the User to fetch their Current Bitcoin Balance  
*/

  $request_arguments = array(
    'api_key' => COINBASE_API_KEY,
  ); 

$current_balance_array = coinbase_query("https://coinbase.com/api/v1/account/balance",$request_arguments,"GET");
print_r($current_balance_array ) ;

?>