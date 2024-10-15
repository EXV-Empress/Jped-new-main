<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Cartel | Sign up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @font-face {
            font-family: "Spoof Trial Thin";
            src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot");
            src: url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.eot?#iefix") format("embedded-opentype"),
                url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff2") format("woff2"),
                url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.woff") format("woff"),
                url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.ttf") format("truetype"),
                url("https://db.onlinewebfonts.com/t/215107c04d97667966f3b627c9e79860.svg#Spoof Trial Thin") format("svg");
        }

        /* Main body styling for dark theme */
         body {
            font-family: "Spoof Trial Thin", sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #121212;
        }

        .container {
            display: flex;
            justify-content: space-between;
            width: 900px;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        }

        .welcome-back {
            background-color: black;
            width: 45%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            margin-left: -15px;
        }

        .create-account {
            color: white;
            padding: 40px;
            width: 55%;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 30px;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .form-group label {
            color: #aaa;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #4d9584;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
        }

        .btn-primary:hover {
            background-color: #937952;
        }

        .btn-black {
            background-color: transparent;
            color: white;
            border-radius: 30px;
            padding: 10px;
            border: 2px solid white; /* Add a border to make the button more visible */
            margin-top: 10px;
            transition: background-color 0.3s ease; /* Add a smooth transition for hover effect */
        }

        .btn-black-active {
            background-color: #ffffff;
        }

        .toggle-btn {
            background: transparent;
            border: none;
            color: white;
            cursor: pointer;
        }

        .toggle-btn:focus {
            outline: none;
        }

        footer {
            text-align: center;
            color: #aaa;
            font-size: 12px;
            padding: 10px;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 100%;
                height: 100%;
            }

            .welcome-back,
            .create-account {
                width: 100%;
                border-radius: 0;
                padding: 20px;
            }

            .welcome-back {
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="welcome-back">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please log in with your personal info</p>
            <a href="/login" class="btn btn-black black-button">Log in</a>
        </div>

        <div class="create-account">
            <h1>Create Account</h1>
            <form action="{{route('Signup.post')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username">
                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your password">
                        <div class="input-group-append">
                            <button type="button" class="toggle-btn" onclick="togglePassword()">👁️</button>
                        </div>
                    </div>
                    @error('password') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                            placeholder="Confirm your password">
                        <div class="input-group-append">
                            <button type="button" class="toggle-btn" onclick="toggleConfirmPassword()">👁️</button>
                        </div>
                    </div>
                </div>
                <div class="button-container" style="text-align: center;">
                    <button type="submit" class="btn btn-black black-button">Sign-Up</button>
                </div>
            </form>
        </div>
    </div>

    <!--<footer>
        &copy; 2024 Cyber Cartel. All rights reserved.
    </footer>-->

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }

        function toggleConfirmPassword() {
            var confirmPasswordInput = document.getElementById("confirmPassword");
            if (confirmPasswordInput.type === "password") {
                confirmPasswordInput.type = "text";
            } else {
                confirmPasswordInput.type = "password";
            }
        }
    </script>
</body>

</html>
