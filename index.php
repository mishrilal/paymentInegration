<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <title>Donation</title>
    </head>

    <body>
        <br><br><br>
        <div class="container">
            <div class="col-xs-12 col-sm-2 offset-md-3 col-md-6">
                <form action = "payment.php" method="post" class="tabletext">
                    <div class="form-group row">
                        <label class = "text-dark col-md-3 col-form-label">Full Name:</label>
                        <div class="col-md-9">
                            <input type="text" class = "form-control" id="name" name="name" placeholder="John Doe" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class = "text-dark col-md-3 col-form-label">Email:</label>
                        <div class="col-md-9">
                            <input type="email" class = "form-control" id="email" name="email" placeholder="johndoe@email.xyz" required>
                        </div>
                    </div><div class="form-group row">
                        <label class = "text-dark col-md-3 col-form-label">Mobile No:</label>
                        <div class="col-md-9">
                            <input type="tel" class = "form-control" id="mobile" name="mobile" placeholder="9876543210" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class = "text-dark col-md-3 col-form-label">Amount:</label>
                        <div class="col-md-9">
                            <input type="number" class = "form-control" id="amount" name="amount" placeholder="5000" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-5 col-md-7">
                            <button class="btn btn-dark btn-outline-success" type="submit" name="submit" value="donate">Donate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

