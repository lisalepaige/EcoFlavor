<?php

include_once("../classes/Product.class.php");


//if latitude and longitude are submitted
if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    //send request and receive json data by latitude and longitude
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
    
    //if request status is successful
    if($status == "OK"){
        //get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  'no location found';
    }

    //calculate distance
    
    $straatnaam = $_POST['straatnaam'];
    $huisnr = $_POST['huisnr'];
    $postcode = $_POST['postcode'];
    $gemeente = $_POST['gemeente'];

    $addressFrom = $location;
    $addressTo = $straatnaam . " " . $huisnr . ", " . $postcode . " " . $gemeente;
    $unit = "K";

    $calculateDis = Product::getDistance($addressFrom, $addressTo, $unit);
    //echo $addressFrom;
    //echo $addressTo;

    $response['status'] = "success";
    $response['distance'] = $calculateDis;
    
    //return address to ajax 
    header('Content-Type: application/json');
    echo json_encode($response);
    
}
?>