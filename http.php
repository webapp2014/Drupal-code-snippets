<?php
//get host domain 
// www.xxx.com \Drupal::request()->getSchemeAndHttpHost()
 
  $redirect_uri = \Drupal::request()->getSchemeAndHttpHost() . Url::fromRoute('routing_name')->toString();

//post

    $response = \Drupal::httpClient()->post($url,[
      'verify' => FALSE,
      'form_params' => $data,
      'headers' => $headers,
      'timeout' => 120,
    ])->getBody()->getContents();