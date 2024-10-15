<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cyber Cartel | Profile</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    body {
        font-family: 'Spoof Trial Thin', sans-serif;
        background-color: #f5f5f5;
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .container {
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    .user_profile, .contents {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .user_profile {
        padding: 20px;
        text-align: center;
    }

    .user_profile img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin-bottom: 15px;
    }

    .user_profile h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .user_profile p {
        margin-bottom: 10px;
        font-size: 18px;
    }

    .user_profile a {
        font-size: 16px;
        color: #007bff;
    }

    .contents {
    margin-top: 30px;
    padding: 30px;
    text-align: center; /* Center text */
}

    .contents h4 {
        font-size: 24px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .profile_images {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
    }

    .user_details {
        margin-bottom: 20px;
    }

    .user_details p {
        font-size: 18px;
    }

    .user_details a {
        font-size: 18px;
        color: #007bff;
        margin-left: 20px;
    }

    .section-header {
        margin-top: 30px;
    }

    .highlight-black {
        background-color: #000;
        color: #fff;
    }

    .table_1 td {
        padding: 15px;
        font-size: 18px;
    }

    .table_2 td {
        padding: 15px;
        font-size: 16px;
        border-bottom: 1px solid #ddd;
    }

    .btn {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border-radius: 50px;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #555;
    }

    .edit-btn {
        color: #ffffff;
        background-color: #ffffff;
        border-radius: 30px;
        padding: 8px 20px;
        margin-left: 10px;
        font-size: 14px;
    }

    .edit-btn:hover {
        background-color: #000000;
    }

    .profile_section {
    display: flex;
    justify-content: center; /* Center contents horizontally */
    align-items: center; /* Center contents vertically */
}
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    @include('Layouts.navbar')

    <!-- Header Section -->
    <br><br><br>

    <div class="container">
        <!-- User Profile Section -->
        <div class="user_profile">
            <a href="/my_account">
            </a>
            <h2>{{auth()->user()->name}}</h2>
            <p>Edit Profile <a href="my_account/edit" class="edit-btn"><i class='bx bx-edit'></i></a></p>



            <!-- Account Links
            <div class="user_details">
                <a href="/my_account" class="myPurchase_header">
                    <p>Profile</p>
                </a>
                 <a href="/address" class="address">
                    <p>Address</p>
                </a> 
            </div> -->
        </div>

        <!-- Purchase Section -->
        <div class="contents">
            <h4>My Profile</h4>
            <p>Manage and protect your account</p>
            <hr>

            <div class="profile_section">
                <div>
                    <p><strong>Username:</strong> {{auth()->user()->name}}</p>
                    <p><strong>Email:</strong> {{auth()->user()->email}}</p>
                </div>
            </div>

            <hr>
        </div>
    </div>

    <br><br><br>

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
