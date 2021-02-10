<?php
    include "instamojo/Instamojo.php";
    
    $pubKey = "test_29ec60fe11fdcd0b59d9b802e61";
    $secKey = "test_c28fa65ff862359af2d0377c8bb";

    $api = new instamojo\Instamojo("$pubKey", "$secKey","https://test.instamojo.com/api/1.1/");
?>