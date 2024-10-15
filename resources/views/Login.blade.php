<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Cartel | Login</title>
    <link rel="stylesheet" href="login.css">
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

        /* Two-panel layout */
        .container {
            width: 900px;
            display: flex;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        /* Left panel (Login) */
        .login-panel {
            background: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            padding: 50px;
            width: 50%;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 230px;
            
        }

        .login-panel h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            margin-left: 25px;
        }

        .login-panel p {
            margin-bottom: 20px;
            margin-left: 60px;
        }

        .login-panel .form-group {
            margin-bottom: 20px;
        }

        .login-panel .form-group input {
            background-color: #2c2c2c;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            border: none;
            width: 100%;
        }

        .login-panel .black-button {
            background-color: transparent;
            color: white;
            border-radius: 30px;
            padding: 10px;
            border: 2px solid white; /* Add a border to make the button more visible */
            margin-top: 10px;
            transition: background-color 0.3s ease; /* Add a smooth transition for hover effect */
        }

        .login-panel .black-link {
            color: #fff;
            text-decoration: none;
        }

        /* Right panel (Signup prompt) */
        .signup-panel {
            background: rgba(255, 255, 255, 0.1);
            padding: 50px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .signup-panel h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .signup-panel p {
            margin-bottom: 30px;
        }

        .signup-panel .black-button {
            background-color: transparent;
            color: white;
            border-radius: 30px;
            padding-right: 50px;
            padding-left: 50px;
            border: 2px solid white; /* Add a border to make the button more visible */
            margin-top: 10px;
            transition: background-color 0.3s ease; /* Add a smooth transition for hover effect */
        }

        /* Adjustments for responsiveness */
        @media (max-width: 767px) {
            .container {
                flex-direction: column;
                width: 100%;
                height: 100%;
            }

            .login-panel, .signup-panel {
                width: 100%;
            }
        }
        .btn-white {
            color: white;
            border: 1px solid black;
        }

        .btn-white:hover {
        background-color: #f1f1f1; /* Slight hover effect */
        }
    </style>
</head>

<body>

    <!-- Content Section -->
    <div class="container">
    <!-- Login Form -->
    <div class="login-panel">
        <h1>Sign in to JPED</h1>

        <form id="loginForm" action="{{ route('Login.post') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                @error('email') 
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                @error('password') 
                    <span class="text-danger">{{ $message }}</span> 
                @enderror
            </div>

            <button type="submit" class="btn btn-block black-button grey-hover">Log in</button>
        </form>

        <!-- Signup Prompt (merged into login container) -->
        <br>
        <p>Start your journey with us.</p>
        <a href="/signup" class="btn btn-white">Sign up</a>
    </div>
</div>

    <!-- Scripts -->
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
