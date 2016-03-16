<?php
/**
 * Author: Deev
 * E-mail: deev@gmail.com
 * Script: AdProviderControll.php
 * Time: 3/16/16 8:20 AM
 */

class AdProviderControl {

    public function getOrder($site_id, $location){

    }

    public function setOrder($site_id, $location, $values){
        $values = ["name" => "Mehedi", "Address" => "Khulna"];
        $data_string = urldecode(json_encode($values));

        /*$ch = curl_init('http://localhost/INS/catch.php');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );*/


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"http://localhost/INS/catch.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"data=$data_string");

        // in real life you should use something like:
        // curl_setopt($ch, CURLOPT_POSTFIELDS,
        //          http_build_query(array('postvar1' => 'value1')));

        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);

        curl_close ($ch);

        print "<pre>";
        //print_r($http_response_header);
        print_r($server_output);
        print "</pre>";
    }
}

$APC = new AdProviderControl();
$APC->setOrder(1, "AL", []);