<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: GET,POST');
header("Access-Control-Allow-Headers: X-Requested-With");

try {

    $url = "https://api.spacexdata.com/v3/launches?limit=100";
    $res = file_get_contents($url);

    if ($res != false) {
        // echo "<pre>";
        echo $res;
        // echo "</pre>";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}