<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $amt = $_POST['amount'];

    include "payDetails.php";
    include "instamojo/Instamojo.php";
    $api = new instamojo\Instamojo("$pubKey", "$secKey","https://test.instamojo.com/api/1.1/");

    try {
        $response = $api->paymentRequestCreate(array(
                "purpose" => "Donation",
                "amount" => $amt,
                "phone" => $mobile,
                "buyer_name" => $name,
                "send_email" => true,
                "email" => $email,
                "send_sms" => true,
                "allow_repeated_payments" => false,
                "redirect_url" => "http://localhost/Baburam/redirect.php",
            //	"webhook" => "http://localhost/Donationgateway-master/redirect.php",
    
                ));
             // print_r($response);
             $pay_url = $response['longurl'];
             header("location:$pay_url");
           }
        catch (Exception $e) {
            print("Error: " . $e->getMessage());
    }

?>