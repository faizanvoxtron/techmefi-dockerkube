<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-48x48.png" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="assets/images/favicons/favicon.svg" />
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />

    <title>Lead Form - Techmefi</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome CSS 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Lexend Deca Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/brief-form.css?v=1.8">

    <!--Intl Library CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.4/css/intlTelInput.css" integrity="sha512-OkSoWyaoScjXhOm87XO5hDz1E5buvm2aAkq+5zJmaYpylA0OKJ5no5qc4ZRrmApoaXEgXc3n0iyVS1q5FgiJjg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <section class="lead-form brief-form">
        <div class="container-fluid">
            <!-- Row for Logo -->
            <div class="logo">
                <img src="assets/images/logo-white.svg" alt="Logo" style="max-width: 200px;">
            </div>

            <!-- Row for Text with Red Background -->
            <div class="row mb-4">
                <div class="col red-background">
                    Get Your Customized Loan Offer
                </div>
            </div>

            <!-- Row for Form Fields -->
            <div class="row">
                <form class="multistep-form" method="post" action="form-bootstrap/lead.php" enctype="multipart/form-data" id="custom-lead-form">
                    <input type="hidden" name="source" value="1">
                    <input type="hidden" name="status" value="2">
                    <!-- First Step -->
                    <div class="step" id="step-1">
                        <!-- <h2 class="text-center">First Step</h2> -->
                        <p class="text-center mb-5">Fast, Flexible, and Tailored to Your Needs</p>
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <input type="text" class="form-control" placeholder="Full Name" name="name">
                            </div>
                            <div class="col-lg-12 col-12">
                                <!-- <input type="tel" class="form-control" placeholder="Phone Number" name="phonenumber"> -->
                                <input class="form-control phone" type="tel" name="phonenumber" id="custom-lead-phone">
                                <span id="valid-msg" class="hide">✓ Valid</span>
                                <span id="error-msg" class="hide"></span>
                            </div>
                            <div class="col-lg-12 col-12">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-red" id="custom-lead-submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- JQuery 3.7 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Custom Validation Files-->
    <script src="assets/js/custom-validation.js?v=1.8"></script>
    <script src="assets/js/custom.js?v=1.8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Intl JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.4/js/intlTelInputWithUtils.min.js" integrity="sha512-P+Uaao2N1kKJP+bMxPITdRRD+nQc2s3hGDMadlBU23Eq8OsiVIGrjSICGCXqJ1DiQGtM0B7AskRi4d8S0Dv2gA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</body>


</html>