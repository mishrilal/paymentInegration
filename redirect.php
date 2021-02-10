<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">

    <title>Thank You</title>
</head>

<body>
    <div class="container mt-5">
        <?php 
                include "payDetails.php";

                $payID = $_GET["payment_request_id"];
                try {
                    $response = $api-> paymentRequestStatus($payID); 
            ?>

        <div class="row">
            <div class="col-sm offset-md-3 col-md-6">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-header bg-dark text-light">
                        <h2 style="text-align:center;"><i>Transaction Details</i></h2>
                    </div>
                    <div class="card-body bg-dark text-light">
                        <p><b>Donar Name :</b> <?php echo htmlentities($response['payments'][0]['buyer_name']); ?></p>
                        <p><b>Donar Email-ID:</b> <?php echo htmlentities($response['payments'][0]['buyer_email']); ?>
                        </p>
                        <p><b>Donated Amount:</b> <?php echo htmlentities($response['payments'][0]['amount']); ?></p>
                        <p><b>Payment ID:</b> <?php echo htmlentities($response['payments'][0]['payment_id']); ?></p>
                    </div>
                    <div class="card-footer">
                        <h4 style="text-align:center;">Status: <?php echo htmlentities($response['status']); ?></h4>
                    </div>
                </div>
                <br>
                <p style="text-align:center;">THANK YOU For Donating...</p>
                <p style="text-align:center;">Transaction Details has been sent to your Email address</p>
                <div style="text-align:center;">
                    <a href="index.php"><button class="btn btn-dark btn-outline-success">Donate More</button></a>
                </div>
            </div>
        </div>




        <?php  
        // <!-- SENDING EMAIL -->
                    $to = $response['payments'][0]['buyer_email'];
                    $subject ="Thank you for Donationg at GRIP Donatation";
                    
                    $message = "Donar Name: " . $response['payments'][0]['buyer_name'] . "
                    Donar Email: " . $response['payments'][0]['buyer_email'] . "
                    Amounted Donated: " . $response['payments'][0]['amount'] . "
                    Payment ID: " . $response['payments'][0]['payment_id'];
                    
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "COntent-type:text/html; charset=UTF-8". "\r\n";
                    $headers .= 'From: <thankyou@grip.donation>' . "\r\n";
                    
                    mail($to, $subject, $message, $headers);

                } 
                catch (Exception $e) {
                    print('Error: ' . $e->getMessage());
                }
            ?>

    </div>
</body>

</html>