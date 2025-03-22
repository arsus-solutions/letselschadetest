<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WebreactionService
{
  protected $baseUrl;

  public function __construct()
  {
      $this->baseUrl = env('EXTERNAL_API_URL');
      Log::info('WebreactionService initialized with URL: ' . $this->baseUrl);
  }

  public function storeData(array $data)
  {
      Log::info('Making API request to: ' . $this->baseUrl);
      Log::info('Request data:', $data);

      // Make a POST request to the external API
      $response = Http::post($this->baseUrl, $data);

      Log::info('API Response status: ' . $response->status());
      Log::info('API Response body:', $response->json());

      // Handle the response as needed
      if ($response->successful()) {
          return $response->json();
      }

      // Handle errors appropriately
      Log::error('API Request failed: ' . $response->body());
      throw new \Exception("API Request failed: " . $response->body());
  }
}