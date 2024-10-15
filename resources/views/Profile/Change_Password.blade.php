<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
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
        font-family: "Spoof Trial Thin";
        margin: 0;
        padding: 0;
    }

    .main {
        flex: 1;
    }

    footer {
        background-color: #343a40;
        color: #fff;
        text-align: center;
        padding: 10px;
        width: 100%;
    }

    table {
        border-collapse: collapse;
        width: 65%;
        border: 1px solid black;
    }

    td {
        padding: 15px;
        text-align: center;
    }

    .table_1 td {
        padding: 15px;
        text-align: center;
        cursor: pointer;
        width: 16.66%;
    }

    .img {
        max-width: 10%;
        margin-right: 10px;
    }

    .clicked {
        border-bottom: 2px solid rgb(0, 0, 0);
        color: rgb(68, 0, 255);
    }

    .profile_img {
        border-radius: 50%;
        width: 7.5vw;
        height: auto;
    }

    .container {
        display: flex;
        width: 100%;
        height: auto;
    }

    .user_profile {
        width: 30%;
        overflow-y: hidden;
        border-right: 1px solid #ccc;
        box-sizing: border-box;
        margin-right: 0;
    }

    .contents {
        width: 100%;
        flex: 1;
        overflow-y: auto;
        padding: 20px;
        overflow-x: hidden;
    }

    .contents table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid black;
        margin-bottom: 20px;
    }

    .table_1 {
        margin-bottom: 10px;
        position: sticky;
        z-index: 2;
        background-color: #ffffff;
    }

    .profile_img {
        border-radius: 50%;
        width: 7.5vw;
        height: auto;
    }

    .user_details {
        text-align: left;
        margin-left: 30%;
        font-size: 14px;
    }

    .user_header {
        text-align: left;
        text-decoration: none;
    }

    .myPurchase_header {
        margin-top: -30px;
        text-align: left;
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .payment {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .address {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .change_pass {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .change_pass {
        text-decoration: none;
        color: rgb(4, 0, 255);
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
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home"><img src="images/logo.png" style="width:200px;"></a>
            <br>
            <form class="d-lg-flex d-xl-flex d-md-flex d-sm-none d-none mb-2" style="margin-left: 10vw;">
                <!-- Desktop Search Bar -->
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    style="width: 40vw;">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <a href="/cart"><img src="images/shopping-cart.png" style="width: 25px; margin-left: 2vw;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <!-- mx-auto to center the content -->
                        <li class="nav-item" style="margin-right: 1.5vw;">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                    <!-- Dropdown content goes here -->
                                    <a class="dropdown-item" href="#">Processor</a>
                                    <a class="dropdown-item" href="#">Motherboard</a>
                                    <a class="dropdown-item" href="#">Ram</a>
                                    <a class="dropdown-item" href="#">Video Card</a>
                                    <a class="dropdown-item" href="#">Power Supply Unit</a>
                                    <a class="dropdown-item" href="#">Solid State Drive</a>
                                    <a class="dropdown-item" href="#">Hard Drive</a>
                                    <a class="dropdown-item" href="#">Chassis</a>
                                    <a class="dropdown-item" href="#">Monitor</a>
                                    <a class="dropdown-item" href="#">Keyboard</a>
                                    <a class="dropdown-item" href="#">Mouse</a>
                                    <a class="dropdown-item" href="#">Headset</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" style="margin-right: 1.5vw;">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pc Builder
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                    <!-- Dropdown content goes here -->
                                    <a class="dropdown-item" href="#">INTEL</a>
                                    <a class="dropdown-item" href="#">AMD</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" style="margin-right: 1.5vw;">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profile
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                    <!-- Dropdown content goes here -->
                                    <a class="dropdown-item" href="/profile">My account</a>
                                    <a class="dropdown-item" href="/my_purchase">My Purchase</a>
                                    <a class="dropdown-item" href="login">Log out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </div>
    </nav>

    <!-- Header Section -->
    <br>
    <br>
    <br>
    <div class="container">
        <div class="user_profile">
            <table>
                <tr>
                    <td>
                        <a href="/my_account"><img src="images/Pre-Built/sysu 1.jpg" class="profile_img"></a>
                        <h6>Username</h6>
                        <a href="/my_account" style="text-decoration: none; color: rgb(0, 0, 0);">
                            <p>Edit Profile</p>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <hr style="margin: 0 auto; width: 100%;">
                    </td>
                </tr>
                <td>
                    <div class="user_header">
                        <a href="/my_account" style="text-decoration: none">My Account</a>
                    </div>
                    <div class="user_details">
                        <a href="/my_account" style="text-decoration: none;" class="myPurchase_header">
                            <p>Profile</p>
                        </a>
                        <a href="/address" style="text-decoration: none;" class="address">
                            <p>Address</p>
                        </a>
                        <a href="/change_passwordV" style="text-decoration: none;" class="change_pass">
                            <p>Change Password</p>
                        </a>
                    </div>
                </td>
                </tr>
                <tr>
                    <td>
                        <div class="myPurchase_header">
                            <a href="/my_purchase" style="text-decoration: none; color: rgb(0, 0, 0);">My Purchase</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <!-- Table Section -->
        <div class="contents">
            <table class="table_2">
                <tr>
                    <td style="text-align: right; display: flex; flex-direction: column; align-items: flex-end;">
                        <h4 style="margin: 0; margin-right: auto; padding:10px">
                            Change Password
                        </h4>
                        <p style="margin: 0; margin-right: auto; padding-left:10px">For your account's security, do not
                            share your password with anyone else</p>
                        <br>
                        <hr style="margin: 0 auto; width: 100%;">
                    </td>
                </tr>


                <tr>
                    <td
                        style="display: flex; align-items: center; justify-content: flex-start; padding: 0px; padding-left: 15px; margin-top:5%">
                        <h6 style="margin-bottom: 2%; margin-left:11%">New Password</h6>
                        <input type="password" style="margin-bottom: 1.5%; margin-left:2%">
                    </td>
                </tr>
                <tr>
                    <td
                        style="display: flex; align-items: center; justify-content: flex-start; padding: 0px; padding-left: 15px; margin-top:2.5%">
                        <h6 style="margin-bottom: 2%; margin-left:8%">Confirm Password</h6>
                        <input type="password" style="margin-bottom: 1.5%; margin-left:2%">
                    </td>
                </tr>
                <tr>
                    <td class="d-flex justify-content-between"
                        style="padding: 0px; padding-left: 15px;; margin-top:2.5%">
                        <a href="/my_account" style="margin-left: 25.5%;"><button>Save</button></a>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div
                            style="display: flex; align-items: center; justify-content: space-between; margin-bottom:2%">
                            <h6 style="margin: 0;"></h6>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1 style="padding: 15%"></h1>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>

    <!-- Footer Section -->
    <footer class="bg-dark text-light text-center py-2">
        <p>&copy; 2023 Dashboard. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script>
    function toggleBorderBottom(element) {
        // Remove 'clicked' class from all td elements in the table
        var tds = element.parentNode.getElementsByTagName('td');
        for (var i = 0; i < tds.length; i++) {
            tds[i].classList.remove('clicked');
        }

        // Add 'clicked' class to the clicked td element
        element.classList.toggle('clicked');
    }
    </script>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>