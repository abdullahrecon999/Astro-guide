<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller{
    
    public function moonphase(Request $request){
        // error_log($request->get('lat'));

        $lat = $request->get('lat');
        $long = $request->get('long');

        $authToken = 'basic NzY4ZWI4MDYtODRhMS00MTFiLThjMTUtOTY0NzRkY2MyNzcxOmM5YTlhYzM1YWIyYWMwNTllZDU1ZDBiNzkwNzI5NTk0ZThkOTlkODY0MWE5NmQ3MTY3MmU3ZDZlMjVjNzVmNzAzMmU1N2FmMzFmZWJlOGNhODIxOGZhNzRhYTkzOGJiNTlhOWZhZmIxODhiYjQzZTAxNTA4MGJkNDljNWQ5MjRjMzY4NjViNWI4ZmUzOTAzMmUyYjVjZTUxZTMxOWNhMTI2NDMyYjc3NjA2MGE3NDg1NmRlZTY5YzQ0MzdmNWYzYWVjOGRiZGExYjBjMDgwMWFlNWUyYWVkNWRlMzk4MTBj';

        // The data to send to the API
        $postData = array (
            'format' => 'png',
            'style' => 
                array (
                'moonStyle' => 'default',
                'backgroundStyle' => 'stars',
                'backgroundColor' => 'red',
                'headingColor' => 'white',
                'textColor' => 'white',
                ),
            'observer' => 
                array (
                'latitude' => (float)$lat,
                'longitude' => (float)$long,
                'date' => date("Y-m-d"),
                ),
            'view' => 
                array (
                'type' => 'portrait-simple',
                'orientation' => 'south-up',
                ),
        );

        // Setup cURL
        $ch = curl_init('https://api.astronomyapi.com/api/v2/studio/moon-phase?format=png');
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$authToken,
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));

        // Send the request
        $response = curl_exec($ch);

        // Check for errors
        if($response === FALSE){
            die(curl_error($ch));
        }

        // Decode the response
        $responseData = json_decode($response, TRUE);

        // Close the cURL handler
        curl_close($ch);


        return response()->json(array('msg'=> $responseData), 200);
    }
}
