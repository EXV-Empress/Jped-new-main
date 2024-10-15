<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="/public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cyber Cartel | Profile</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: "Spoof Trial Thin";
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .main {
            flex: 1;
        }

        footer {
            margin-top: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid black;
        }

        td {
            padding: 15px;
            text-align: center;
        }

        .user_profile {
            width: 30%;
            overflow-y: hidden;
            box-sizing: border-box;
            border: 1px solid rgb(255, 255, 255);
            background-color: #fff; /* Add background color */
            border-radius: 8px; /* Rounded corners */
            padding: 20px; /* Inner padding */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
            margin-left: 460px; /* Space between profile and contents */
        }

        .container {
            margin-top: 200px;
        }


        .contents {
            flex: 1;
            overflow-y: auto;
            padding: 20px; /* Consistent padding */
            background-color: #fff; /* White background */
            border-radius: 8px; /* Rounded corners */
            margin-left: 20px; /* Space between profile and contents */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
            margin-top: 50px;
        }

        .profile_img {
            border-radius: 50%;
            width: 70%; /* Responsive width */
            height: auto;
            margin: 0 auto; /* Centering */
            display: block; /* Block for centering */
        }

        .user_details {
            text-align: center; /* Centered text */
            margin-top: 10px; /* Space above */
            font-size: 16px; /* Slightly larger font */
        }

        .user_header {
            text-align: center; /* Centered header */
            margin-bottom: 20px; /* Space below header */
        }

        .input-group {
            margin-bottom: 15px; /* Space between input fields */
        }

        input[type="text"],
        input[type="email"] {
            width: 100%; /* Full width */
            padding: 10px; /* Inner padding */
            border: 1px solid #ccc; /* Border styling */
            border-radius: 5px; /* Rounded corners */
            font-size: 16px; /* Font size */
            transition: border-color 0.3s; /* Transition effect */
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #007bff; /* Change border color on focus */
            outline: none; /* Remove outline */
        }

        .custom-btn {
            border: none; /* Remove default border */
            background-color: #000000; /* Button background color */
            color: #fff; /* Text color */
            padding: 10px 20px; /* Inner padding */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s; /* Transition effect */
            cursor: pointer; /* Pointer cursor on hover */
        }

        .custom-btn:hover {
            background-color: #ffffff; /* Change background color on hover */
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    @include('Layouts.navbar')

    <!-- Header Section -->
    <div class="container">
        <table class="user_profile">
            <tr>
                <td>
                    <h2 style="margin-bottom: 10px;">{{auth()->user()->name}}</h2>
                    <a href="my_account/edit" style="text-decoration: none; color: rgb(0, 0, 0);">
                        <p>Edit Profile <i class='bx bx-edit'></i></p>
                    </a>
                </td>
            </tr>
        </table>

        <!-- Table Section -->
        <div class="contents">
            <h4 class="user_header">My Profile</h4>
            <p style="text-align: center;">Manage and protect your account</p>
            <hr>

            <form action="{{route("user.update-profile")}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="input-group">
                    <label for="name" style="font-weight: bold;">Username:</label>
                    <input type="text" name="name" id="name" value="{{$user->name}}" required />
                </div>

                <div class="input-group">
                    <label for="email" style="font-weight: bold;">Email:</label>
                    <input type="email" name="email" id="email" value="{{$user->email}}" required />
                </div>

                <div style="display: flex; justify-content: flex-end;">
                    <button type="submit" class="btn custom-btn">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer Section 
    @include('Layouts.footer3')-->

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
