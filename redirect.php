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
    <div class="container">
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
                        <h2>Transaction Details</h2>
                    </div>
                    <div class="card-body bg-dark text-light">
                        <p><b>Donar Name :</b> <?php echo htmlentities($response['payments'][0]['buyer_name']); ?></p>
                        <p><b>Donar Email-ID:</b> <?php echo htmlentities($response['payments'][0]['buyer_email']); ?>
                        </p>
                        <p><b>Donated Amount:</b> <?php echo htmlentities($response['payments'][0]['amount']); ?></p>
                        <p><b>Payment ID:</b> <?php echo htmlentities($response['payments'][0]['payment_id']); ?></p>
                    </div>
                    <div class="card-footer">
                        <h4>Status: <?php echo htmlentities($response['status']); ?></h4>
                    </div>
                </div>
            </div>
        </div>

        <?php  
                } 
                catch (Exception $e) {
                    print('Error: ' . $e->getMessage());
                }
            ?>

    </div>
</body>

</html>