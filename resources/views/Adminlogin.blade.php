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
        overflow: hidden;
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

    /* Hover effect for the "Login" button */
    .grey-hover:hover {
        background-color: #333;
        color: white;
        /* You may adjust the text color as needed */
    }

    /* Increase right margin for the content */
    .custom-container {
        margin-right: 10px;
        /* Adjust as needed */
    }

    /* Add more padding for the login form */
    /*ajust para sa login form*/
    #loginForm {
        border: 1px solid #ccc;
        border-radius: 50px;
        padding: 60px;
        /* Adjust as needed */
    }

    .btn-black {
        background-color: white;
        color: black;
    }

    .btn-black-active {
        background-color: black;
        color: white;
    }

    .position-fixed {
        transition: transform 0.3s ease-in-out;
        /* Adjust the transition properties as needed */
    }

    .position-fixed:hover {
        transform: scale(1.2);
        /* Adjust the scale factor as needed */
    }

    footer {
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 10px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }
    </style>
</head>

<body>

    <!-- Navigation Bar 
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
        style="background-color: black; position: fixed; width: 100%; border-radius: 0 0 15px 15px;">
        <a class="navbar-brand" href="/"><img src="images/cyber_-removebg-preview.png" style="width:200px;"></a>
         Add your navigation links if needed
    </nav> -->


    <!-- Content Section -->
    <section style="margin-top: 100px; margin-bottom: 20px;">
        <div class="container custom-container text-center">
            <!-- Login Form Row -->
            <div class="row">
                <div class="col-lg-7 col-md-9 col-sm-12">
                    <!-- Login Content -->
                    @if(session()->has('error'))
                        <div class ="alert alert-danger">{{session('error')}}</div>
                        @endif
                    <form id="loginForm" action="{{route('adminpost')}}" method="post">
                    @csrf
                        <header class="py-5 text-center">
                            <h1>Admin Login</h1>
                        </header>

                        <div class="form-group" style="margin-bottom: 15px;">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Enter your email">
                        </div>

                        <div class="form-group" style="margin-bottom: 30px;">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-black btn-sm" id="showPasswordBtn"
                                        onclick="togglePassword()">Show</button>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-block black-button grey-hover">Login</button>
                        <br>
                    </form>
                </div>

                <!-- Image on the left side (as a clickable button) -->
                <div class="col-lg-6 col-md-3 col-sm-9 position-fixed text-left" style="left: 0; top: -40px;">
                    <a href="/">
                        <img src="images/black 2.png" alt="Left Image" style="width: 100%;">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section 
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
    </footer>-->

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var showPasswordBtn = document.getElementById("showPasswordBtn");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordBtn.classList.add("btn-black-active");
        } else {
            passwordInput.type = "password";
            showPasswordBtn.classList.remove("btn-black-active");
        }
    }
    </script>
</body>

</html>