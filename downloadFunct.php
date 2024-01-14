
<?php

// Make sure to install the 'guzzlehttp/guzzle' package: composer require guzzlehttp/guzzle
require 'vendor/autoload.php';

use GuzzleHttp\Client;

// Create a Guzzle client
$client = new Client();

// Enable CORS (Cross-Origin Resource Sharing)
header('Access-Control-Allow-Origin: http://127.0.0.1:5501'); // Replace with your actual origin
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, PATCH, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Define a function to handle the API request
function handleStreamtapeRequest() {
    try {
        $file = 'eA8ABOkqBJcYqkm'; // Replace with your actual file value
        $ticket = 'eA8ABOkqBJcYqkm~eaf09585290523f4f998~1703931577~n~~1~7iC8b1RuXr_LD88q'; // Replace with your actual ticket value
        $apiUrl = 'https://api.streamtape.com/file/dl?file=' . $file . '&ticket=' . $ticket;

        // Make the actual API request using Guzzle
        $response = $client->get($apiUrl);
        $data = json_decode($response->getBody(), true);

        // Log the API response
        print_r('API Response: ' . print_r($data, true));
        print_r('Download Link: ' . $data['result']['url']);

        // Return the API response to the client
        echo json_encode($data);
    } catch (Exception $e) {
        // Handle errors
        error_log('Error: ' . $e->getMessage());
        http_response_code(500);
        echo json_encode(['error' => 'Internal Server Error']);
    }
}

// Define the route to handle the API request

    handleStreamtapeRequest();

?>