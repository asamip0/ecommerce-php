
<?php
include('hesder.php');
include('mycart.php');
include('manage_cart.php')
session_start();


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https:/a.khalti.com/api/v2/epayment/initiate/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "return_url": "https://instagram.com/",
  "website_url": "https://example.com/",
  "amount": $,
  "purchase_order_id": "test12",
  "purchase_order_name": "test",
  "customer_info": {
      "name": "Ashim Upadhaya",
      "email": "example@gmail.com",
      "phone": "9811496763"
  },

  "product_details": [
      {
          "identity": "0123456789",
          "name": "Khalti logo",
          "total_price": 500,
          "quantity": 1,
          "unit_price": 500
      }
  ]
}
',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Key live_secret_key_68791341fdd94846a146f0457ff7b455',
    'Content-Type: application/json'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
// echo $response;
 $response = json_decode($response, true); //conv in array
print_r($response);

// echo '<pre>'; to see response
//  print_r($response);
// echo '</pre>';

echo $response['payment_url']; //response ma k aayo bnhanera
 header("Location: ". $response['payment_url']);

 ?>