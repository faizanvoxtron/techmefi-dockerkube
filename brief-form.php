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

    <title>Brief Form - Techmefi</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome CSS 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Lexend Deca Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/brief-form.css?v=1.4">
</head>

<body>
    <section class="brief-form">
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
                <form class="multistep-form" id="brief-form">
                    <input type="hidden" name="lead_id" value="<?= $_GET['lead_id'] ?>">
                    <input type="hidden" name="source" value="https://techmefi.com">
                    <!-- Second Step -->
                    <div class="step" id="step-2">
                        <!-- <h2 class="text-center">Second Step</h2> -->
                        <p class="text-center mb-5">Please select your business structure:</p>
                        <div class="mb-5 d-flex justify-content-between radio-box-container">
                            <div class="radio-box">
                                <input type="radio" id="sole-proprietor" name="business-structure" value="Sole Proprietor" required>
                                <label for="sole-proprietor">
                                    <i class="fa-regular fa-user"></i>
                                    Sole Proprietor
                                </label>
                            </div>
                            <div class="radio-box">
                                <input type="radio" id="partnership" name="business-structure" value="Partnership">
                                <label for="partnership">
                                    <i class="fa-regular fa-handshake"></i>
                                    Partnership
                                </label>
                            </div>
                            <div class="radio-box">
                                <input type="radio" id="llc" name="business-structure" value="Limited Liability Company">
                                <label for="llc">
                                    <i class="fa-solid fa-people-arrows"></i>
                                    Limited Liability Company
                                </label>
                            </div>
                            <div class="radio-box">
                                <input type="radio" id="c-corp" name="business-structure" value="C Corporation">
                                <label for="c-corp">
                                    <i class="fa-regular fa-building"></i>
                                    C Corporation
                                </label>
                            </div>
                            <div class="radio-box">
                                <input type="radio" id="s-corp" name="business-structure" value="S Corporation">
                                <label for="s-corp">
                                    <i class="fa-regular fa-building"></i>
                                    S Corporation
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="button" class="btn btn-red btn-continue" onclick="showStep(3)">Continue</button>
                        </div>
                    </div>

                    <!-- Third Step -->
                    <div class="step" id="step-3" style="display: none;">
                        <p class="text-center mb-5">Select Loan Amount</p>
                        <div class="mb-5 text-center">
                            <!-- Added name attribute to the input field -->
                            <input type="range" id="loanAmountRange" name="loanAmount" min="100000" max="1000000" step="10000" value="100000" oninput="updateLoanAmount(this.value)" required>
                            <p class="mt-3">Selected Amount: <span id="loanAmount">$100,000</span></p>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="button" class="btn btn-red" onclick="showStep(2)">Previous</button>
                            <button type="button" class="btn btn-red btn-continue" onclick="showStep(4)">Continue</button>
                        </div>
                    </div>

                    <!-- Fourth Step -->
                    <div class="step" id="step-4" style="display: none;">
                        <p class="text-center mb-5">Please provide the reason for financing:</p>
                        <div class="mb-5 text-center">
                            <label for="reason">Reason for Financing:</label>
                            <!-- Added name attribute to the select element -->
                            <select id="reason" name="financingReason" class="form-control mb-4" required>
                                <option value="" disabled selected>Select a reason</option>
                                <option value="business-expansion">Business Expansion</option>
                                <option value="equipment-purchase">Equipment Purchase</option>
                                <option value="inventory">Inventory</option>
                                <option value="working-capital">Working Capital</option>
                                <option value="debt-refinancing">Debt Refinancing</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="button" class="btn btn-red" onclick="showStep(3)">Previous</button>
                            <button type="button" class="btn btn-red btn-continue" onclick="showStep(5)">Continue</button>
                        </div>
                    </div>

                    <!-- Fifth Step -->
                    <div class="step" id="step-5" style="display: none;">
                        <!-- <h2 class="text-center">Fifth Step</h2> -->
                        <p class="text-center mb-5">How quickly do you need the money?</p>
                        <div class="mb-5 d-flex justify-content-between">
                            <div class="radio-box">
                                <input type="radio" id="within-a-week" name="urgency" value="Within a week" required>
                                <label for="within-a-week">Within a week</label>
                            </div>
                            <div class="radio-box">
                                <input type="radio" id="within-two-weeks" name="urgency" value="Within two weeks">
                                <label for="within-two-weeks">Within two weeks</label>
                            </div>
                        </div>
                        <div class="mb-5 d-flex justify-content-between">
                            <div class="radio-box">
                                <input type="radio" id="within-a-month" name="urgency" value="Within a month">
                                <label for="within-a-month">Within a month</label>
                            </div>
                            <div class="radio-box">
                                <input type="radio" id="unsure" name="urgency" value="Unsure, just browsing rates">
                                <label for="unsure">Unsure, just browsing rates</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="button" class="btn btn-red" onclick="showStep(4)">Previous</button>
                            <button type="button" class="btn btn-red btn-continue" onclick="showStep(6)">Continue</button>
                        </div>
                    </div>

                    <!-- Sixth Step -->
                    <div class="step" id="step-6" style="display: none;">
                        <p class="text-center mb-5">What's your average monthly revenue?</p>
                        <div class="mb-5 text-center">
                            <!-- Added name attribute to the input element -->
                            <input type="text" name="monthlyRevenue" class="form-control" placeholder="Enter your average monthly revenue" required>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="button" class="btn btn-red" onclick="showStep(5)">Previous</button>
                            <button type="button" class="btn btn-red btn-continue" onclick="showStep(7)">Continue</button>
                        </div>
                    </div>

                    <!-- Seventh Step -->
                    <div class="step" id="step-7" style="display: none;">
                        <!-- <h2 class="text-center">Seventh Step</h2> -->
                        <p class="text-center mb-5">Please rate your credit score:</p>
                        <div class="mb-5 d-flex justify-content-between radio-box-container">
                            <div class="radio-box">
                                <input type="radio" id="excellent" name="credit-score" value="Excellent (720+)" required>
                                <label for="excellent">Excellent (720+)</label>
                            </div>
                            <div class="radio-box">
                                <input type="radio" id="good" name="credit-score" value="Good (680-719)">
                                <label for="good">Good (680-719)</label>
                            </div>
                            <div class="radio-box">
                                <input type="radio" id="fair" name="credit-score" value="Fair (640-679)">
                                <label for="fair">Fair (640-679)</label>
                            </div>
                            <div class="radio-box">
                                <input type="radio" id="poor" name="credit-score" value="Poor (639 or less)">
                                <label for="poor">Poor (639 or less)</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="button" class="btn btn-red" onclick="showStep(6)">Previous</button>
                            <button type="button" class="btn btn-red btn-continue" onclick="showStep(8)">Continue</button>
                        </div>
                    </div>

                    <!-- Eighth Step -->
                    <div class="step" id="step-8" style="display: none;">
                        <p class="text-center mb-5">Where is your business located?</p>
                        <div class="mb-5 text-center">
                            <label for="business-zip" class="form-label">Business ZIP Code</label>
                            <!-- Added name attribute to the input element -->
                            <input type="text" id="business-zip" name="businessZipCode" class="form-control" placeholder="Enter ZIP Code" pattern="\d*" maxlength="5" required>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="button" class="btn btn-red" onclick="showStep(7)">Previous</button>
                            <button type="button" class="btn btn-red btn-continue" onclick="showStep(9)">Continue</button>
                        </div>
                    </div>

                    <!-- Ninth Step -->
                    <div class="step" id="step-9" style="display: none;">
                        <!-- <h2 class="text-center">Ninth Step</h2> -->
                        <p class="text-center mb-5">What is the name of your business?</p>
                        <div class="mb-5 text-center">
                            <label for="business-name" class="form-label">Business Name</label>
                            <input type="text" id="business-name" class="form-control" placeholder="Enter Business Name" required name="business-name">
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="button" class="btn btn-red" onclick="showStep(8)">Previous</button>
                            <button type="button" class="btn btn-red btn-continue" onclick="showStep(10)">Continue</button>
                        </div>
                    </div>

                    <!-- Tenth Step -->
                    <div class="step" id="step-10" style="display: none;">
                        <p class="text-center mb-5">When did you start your business?</p>
                        <div class="mb-5 text-center">
                            <div class="d-flex justify-content-center gap-5 select-container">
                                <div>
                                    <label for="start-month" class="form-label">Month</label>
                                    <!-- Added name attribute -->
                                    <select id="start-month" name="startMonth" class="form-control" required>
                                        <option value="" disabled selected>Select Month</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="start-year" class="form-label">Year</label>
                                    <!-- Added name attribute -->
                                    <select id="start-year" name="startYear" class="form-control" required>
                                        <option value="" disabled selected>Select Year</option>
                                        <!-- Populate years from 1950 to current year -->
                                        <script>
                                            const currentYear = new Date().getFullYear();
                                            for (let year = 1950; year <= currentYear; year++) {
                                                document.write(`<option value="${year}">${year}</option>`);
                                            }
                                        </script>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="button" class="btn btn-red" onclick="showStep(9)">Previous</button>
                            <button type="button" class="btn btn-red btn-continue" onclick="showStep(11)">Continue</button>
                        </div>
                    </div>

                    <!-- Eleventh Step -->
                    <div class="step" id="step-11" style="display: none;">
                        <!-- <h2 class="text-center">Eleventh Step</h2> -->
                        <p class="text-center mb-5">What industry is your business in?</p>
                        <div class="mb-5 text-center">
                            <label for="industry" class="form-label">Industry</label>
                            <select id="industry" class="form-control" required name="industry" >
                                <option value="" disabled selected>Select Industry</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Construction">Construction</option>
                                <option value="Retail">Retail</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Technology">Technology</option>
                                <option value="Finance">Finance</option>
                                <option value="Hospitality">Hospitality</option>
                                <option value="Manufacturing">Manufacturing</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Education">Education</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="button" class="btn btn-red" onclick="showStep(10)">Previous</button>
                            <button type="button" class="btn btn-red btn-continue" id="post_brief">Submit</button>
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

    <!-- Brief Form -->
    <script>
        function showStep(step) {
            // Hide all steps
            document.querySelectorAll('.step').forEach(function(el) {
                el.style.display = 'none';
            });

            // Show the selected step
            document.getElementById('step-' + step).style.display = 'block';

            // After showing the step, validate fields
            validateStep(step);
        }

        function submitForm() {
            // Only called on the final submit action
            alert('Form submitted!'); // For demonstration purposes
            // Add actual form submission logic here if needed
        }

        function updateLoanAmount(value) {
            const loanAmountDisplay = document.getElementById('loanAmount');

            // Format the loan amount in USD
            const formattedValue = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 0,
            }).format(value);

            // Display the formatted value
            loanAmountDisplay.textContent = formattedValue;
        }

        // Function to validate all fields in the current step
        function validateStep(step) {
            let isValid = true; // Default to true

            // Get all required fields in the current step
            const requiredFields = document.querySelectorAll(`#step-${step} [required]`);

            // Loop through all required fields and check if they are filled
            requiredFields.forEach(function(field) {
                if (field.type === 'radio') {
                    const name = field.name;
                    if (!document.querySelector(`input[name="${name}"]:checked`)) {
                        isValid = false;
                    }
                } else if (!field.value.trim()) {
                    isValid = false;
                }
            });

            // Enable or disable the "Continue" button based on validation
            const continueButton = document.querySelector(`#step-${step} .btn-continue`);
            if (continueButton) {
                continueButton.disabled = !isValid;
            }
        }

        // Event listeners for real-time validation
        document.addEventListener('DOMContentLoaded', function() {
            // Show the second step (#step-2) on page load
            showStep(2);

            // Initialize loan amount display (if on the loan step)
            const loanAmountRange = document.getElementById('loanAmountRange');
            if (loanAmountRange) {
                updateLoanAmount(loanAmountRange.value);
            }

            // Listen for input changes to revalidate fields on every step
            document.querySelectorAll('input, select').forEach(function(element) {
                element.addEventListener('input', function() {
                    const step = element.closest('.step').id.split('-')[1]; // Get step number from the parent element
                    validateStep(step); // Validate the current step
                });
            });
        });
    </script>

    <!-- CRM Service -->
    <script>
        var api_base_url = "https://dashboard.techmefi.com/dynamic_form/api/"
        var form = $('#brief-form')

        $(document).ready(function() {

            $(document).on('click', '#post_brief', function(e) {
                e.preventDefault();
                submitBrief();
            })
        })

        async function getApiToken() {
            let endpoint = "token";

            let response = await $.get(api_base_url + endpoint);
            return JSON.parse(response);
        }

        async function submitBrief() {
            let package_name = "<?= $_GET['package'] ?>";
            let package_price = "<?= $_GET['price'] ?>";
            // let api_token = await getApiToken();
            var formData = new FormData(form[0]);
            formData.append("package_name", package_name);

            await $.ajax({
                url: api_base_url + "post/1/", // here 1 is form ID which represents type of form
                cache: false,
                type: "post",
                dataType: 'json',
                contentType: false,
                processData: false,
                data: formData,
                success: function(response) {
                    if (response.status == true) {
                        // let payment_page_url = "../checkout.php?lead_id=" + <?= $_GET['lead_id'] ?> + "&package=<?= urlencode($_GET['package']) ?>" + "&price=<?= urlencode($_GET['price']) ?>";
                        let payment_page_url = "thank-you.php?lead_id=" + <?= $_GET['lead_id'] ?> + "&package=" + package_name + "&price=" + package_price;
                        window.location = payment_page_url;
                    } else {
                        alert(response.message);
                    }
                }
            });
        }
    </script>

</body>


</html>