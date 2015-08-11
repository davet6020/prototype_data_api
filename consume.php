<?php

$domain = 'http://prototype_data_api/';
$restUrl = 'books_data';

// The data to send to the API.  If not required comment out CURLOPT_POSTFIELDS.
$postData = array(
    'thing1' => 'foo',
    'thing2' => 'bar',
);

// Setup cURL
$ch = curl_init($domain . $restUrl);

curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

// Send the request
$response = curl_exec($ch);
echo $response;

// Check for errors
if($response === FALSE){
    die(curl_error($ch));
}

