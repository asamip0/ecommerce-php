
<?php
include('hesder.php');

session_start();
$pay_details = [
  "return_url" => "https://Khalti.com/",
  "website_url" => "https://example.com/",
  "amount" => $_POST['total'] * 100,
  "purchase_order_id" => "test12",
  "purchase_order_name" => "test",
  "customer_info" => [
    "name" => "Test User",
    "email" => "Test@gmail.com",
    "phone" => "9800000000"
  ],
  "product_details" => [
    [
      "identity" => "0123456789",
      "name" => "Khalti Test",
      "total_price" => $_POST['total'] * 100,
      "quantity" => 1,
      "unit_price" => $_POST['total'] * 100
    ]
  ]
];

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
  CURLOPT_POSTFIELDS => json_encode($pay_details),
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
header("Location: " . $response['payment_url']);

?>