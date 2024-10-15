<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin"
        rel="stylesheet">
    <style>
    @import url(https://db.onlinewebfonts.com/c/215107c04d97667966f3b627c9e79860?family=Spoof+Trial+Thin);

    @font-face {
        font-family: "Spoof Trial Thin";
        src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot");
        src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot?#iefix")format("embedded-opentype"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff2")format("woff2"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff")format("woff"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.ttf")format("truetype"),
            url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.svg#Spoof Trial Thin")format("svg");
    }

    /* Additional styles for responsiveness */
    body {
        font-family: "Spoof Trial Thin";
        padding-top: 60px;
        /* Add padding to body for the fixed navbar */
    }

    .black-button {
        background-color: black;
        color: white;
    }

    .black-link {
        text-decoration: none;
        color: black;
    }

    .btn-black-button:hover {
        background-color: #333;
    }

    /* Hover effect for the Next button */
    .btn-primary.black-button:hover {
        background-color: #333;
        border: 1px solid #333;
        color: white;
    }

    footer {
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 10px;
    }

    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
        /* Apply the transition to the transform property */
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
        /* Increase the scale on hover */
    }
    </style>
</head>

<body>
    <!-- Navigation Bar 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/"><img src="images/logo.png" style="width:200px;"></a>
         Add your navigation links if needed 
    </nav> -->



    <!-- Login Content -->
    <section style="margin-top: 20px; margin-bottom: 20px;">
        <div class="container">
            <div class=" row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <!-- Back Button -->
                    <a href="/login" class="btn btn-outline-secondary mb-3">Back</a>

                    <form id="loginForm" action="/verify" method="post"
                        style="border: 1px solid #ccc; border-radius: 50px; padding: 80px;">
                        @csrf

                        <header class="py-5 text-center">
                            <h1>Reset Password</h1>
                            <p>Enter your Email Address to reset your account's password.</p>
                        </header>

                        <div class="form-group" style="margin-bottom: 20px;">

                            <input type="email" class="form-control" id="enterEmail" name="enterEmail"
                                placeholder="Email">
                        </div>

                        <button type="submit"
                            class="btn btn-primary btn-block black-button btn-black-button">Next</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-black text-light text-center py-3 fixed-bottom">
        <div class="row">
            <div class="col-md text-left ml-md-5">
                <p><a href="/terms" class="text-light">Terms and Conditions</a></p>
            </div>
            <div class="col-md text-center">
                <p>&copy; 2023 Login Page. All rights reserved.</p>
            </div>
            <div class="col-md text-right mr-md-5">
                <p><a href="https://www.facebook.com/yourpage" class="text-light">Follow us on Facebook</a></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>