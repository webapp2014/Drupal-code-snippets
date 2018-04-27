<?php
//get host domain 
// www.xxx.com \Drupal::request()->getSchemeAndHttpHost()
 
  $redirect_uri = \Drupal::request()->getSchemeAndHttpHost() . Url::fromRoute('routing_name')->toString();

//post
    $data = [
  		'arg1' => 333,
  		'arg2' => 3444
    ];

    $headers = [
      'Content-Type' => 'application/x-www-form-urlencoded'
    ];
    
    $response = \Drupal::httpClient()->post($url,[
      'verify' => FALSE,
      'form_params' => $data,
      'headers' => $headers,
      'timeout' => 120,
    ])->getBody()->getContents();

//TrustedRedirectResponse
return new TrustedRedirectResponse('http://xxx.com');   

//json data
     $output[] = array();
     return new JsonResponse($output);  