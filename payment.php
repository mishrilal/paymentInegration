<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $amt = $_POST['amount'];

    include "payDetails.php";

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
                "redirect_url" => "http://localhost/paymentIntegration/redirect.php",
            	// "webhook" => "http://localhost/paymentIntegration/redirect.php",
    
                ));
             $pay_url = $response['longurl'];
             header("location:$pay_url");
           }
        catch (Exception $e) {
            print("Error: " . $e->getMessage());
    }

?>