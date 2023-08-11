<?php

namespace Plug\Services;
require '../../vendor/autoload.php';
/**
 * Request Class Documentation
 *
 * This class encapsulates methods for fetching data from a specified endpoint using GuzzleHttp.
 *
 * @package    GuzzleHttp
 * @subpackage Client
 */



use GuzzleHttp\Client;

class Request
{
    /**
     * Base URL for API requests
     *
     * @var string $BASE_URL The base URL used for API requests.
     *                       Change this URL when deploying to production.
     *                       Example: "https://mybaseurl.com/"
     */
    private $BASE_URL = "../../resources/js/"; // Replace with actual base URL or endpoint

    /**
     * Fetch Data from API Endpoint
     *
     * This function sends a GET request to the specified endpoint and retrieves JSON data.
     *
     * @param string $endpoint The API endpoint to fetch data from.
     * @return array|bool Fetched data as an associative array Or JSON Format, or false on error.
     */
    public function fetchData($endpoint)
    {
        try {
            // Construct the full API URL
            $apiUrl = $this->BASE_URL . $endpoint;

            // Initialize GuzzleHttp client
            $client = new Client();

            // Send GET request to API
            $response = $client->get($apiUrl);

            // Parse response JSON
            $data = json_decode($response->getBody(), true);

            return $data;
        } catch (\Exception $e) {
            // In case of an exception, handle the error gracefully
            // You might want to log the error instead of dying
            die("Request.php : " . $e->getMessage());
            // You can also consider throwing a custom exception here
            // throw new CustomRequestException("Failed to fetch data: " . $e->getMessage());
        }
    }
}
