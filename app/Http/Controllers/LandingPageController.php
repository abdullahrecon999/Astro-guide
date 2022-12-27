<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller{

    public function index() {
        $msg = "";

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://lldev.thespacedevs.com/2.2.0/launch/?format=json&last_updated__gte=&last_updated__lte=&mission__orbit__name=&mission__orbit__name__icontains=&name=&net__gt=&net__gte=2021-12-12T00%3A00%3A00Z&net__lt=2022-01-10T00%3A00%3A00Z&net__lte=&r_spacex_api_id=&rocket__configuration__full_name=&rocket__configuration__full_name__icontains=&rocket__configuration__id=&rocket__configuration__manufacturer__name=&rocket__configuration__manufacturer__name__icontains=&rocket__configuration__name=&rocket__spacecraftflight__spacecraft__id=&rocket__spacecraftflight__spacecraft__name=&rocket__spacecraftflight__spacecraft__name__icontains=&slug=&status=&window_end__gt=&window_end__gte=&window_end__lt=&window_end__lte=&window_start__gt=&window_start__gte=&window_start__lt=&window_start__lte=',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        $img = json_decode($response,true)["results"];
        curl_close($curl);
        
        $images = array();
        foreach($img as $key => $value){
            //echo $value['image'];
            array_push($images,$value['image']);
        }

        return response()->json(array('msg'=> $images), 200);
    }

    public function images() {
        $msg = "";

        $respdata = array();

        for($i = 10; $i<70; $i=$i+10){
            $curl = curl_init();
            error_log(strval($i));
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://lldev.thespacedevs.com/2.2.0/launch/?format=json&last_updated__gte=&last_updated__lte=&mission__orbit__name=&mission__orbit__name__icontains=&name=&net__gt=&net__gte=2020-01-01T00%3A00%3A00Z&net__lt=2022-01-10T00%3A00%3A00Z&net__lte=&offset=".strval($i)."&r_spacex_api_id=&rocket__configuration__full_name=&rocket__configuration__full_name__icontains=&rocket__configuration__id=&rocket__configuration__manufacturer__name=&rocket__configuration__manufacturer__name__icontains=&rocket__configuration__name=&rocket__spacecraftflight__spacecraft__id=&rocket__spacecraftflight__spacecraft__name=&rocket__spacecraftflight__spacecraft__name__icontains=&slug=&status=&window_end__gt=&window_end__gte=&window_end__lt=&window_end__lte=&window_start__gt=&window_start__gte=&window_start__lt=&window_start__lte=",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            //$response = $response + curl_exec($curl);
            array_push($respdata,curl_exec($curl));
        }

        $images = array();
        for($j = 0; $j < sizeof($respdata); $j++){
            $response = $respdata[$j];

            $img = json_decode($response,true)["results"];
            curl_close($curl);
            //error_log(sizeof($respdata));
            foreach($img as $key => $value){
                //echo $value['image'];
                array_push($images,$value['image']);
            }
        }

        return response()->json(array('msg'=> $images), 200);
    }

}
