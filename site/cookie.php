<?php

    $cookie = setcookie("cookie", true, [
        'expires' => time() + (120*60),
        'path' => '/',
        'domain' => "portfolio.localhost",
        'secure' => true,
        'httponly' => false,
        'samesite' => 'strict',
    ]); 

    $arr = [];

    $cookie ? $arr = ["cookie" => "set"] : $arr =["cookie" => "error"];

    echo json_encode($arr);
    
?>