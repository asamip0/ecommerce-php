<?php
 //UI
 $clientName = "Client Name";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://services.khalti.comepayment/initiate/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "return_url": "https://example.com/",
  "website_url": "https://example.com/",
  "amount": 1000,
  "purchase_order_id": "test12",
  "purchase_order_name": "test",
  "customer_info": {
      "name": `$clientName`,

      "email": "example@gmail.com",
      "phone": "9811496763"
  },
  "amount_breakdown": [
      {
          "label": "Mark Price",
          "amount": 500
      },
      {
          "label": "VAT",
          "amount": 500
      }
  ],
  "product_details": [
      {
          "identity": "1234567890",
          "name": "Khalti logo",
          "total_price": 500,
          "quantity": 1,
          "unit_price": 500
      }
  ]
}
',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Key live_secret_key_9fab30bbee074013a3f0fb804eb4e578',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;
$response = json_decode($response, true);
echo '<pre>';
print_r($response);
echo '</pre>';
header("Location: ". $response['payment_url']);