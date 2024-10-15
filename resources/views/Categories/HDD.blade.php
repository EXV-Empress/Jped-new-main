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
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        background-color: #ffffff;
        overflow-x: hidden;
    }

    main {
        flex: 1;
    }

    footer {
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 10px;
    }

    .slider-frame {
        overflow: hidden;
        max-width: 100%;
        margin-top: 20px;
    }

    .slide-images {
        display: flex;
        flex-direction: row;
        transition: transform 0.5s ease-in-out;
    }

    .img-container {
        width: 100%;
        /* Adjust the width as needed */
        box-sizing: border-box;
        flex: 0 0 auto;
        text-align: center;
    }

    #pics {
        max-width: 100%;
        /* Set max-width to 100% to ensure it doesn't exceed its container */
        height: auto;
        /* Allow the height to adjust proportionally */
        display: block;
        /* Remove any default inline styles that may affect sizing */
        margin: 0 auto;
    }

    .img-container img {
        width: 75vw;
        /* Make images responsive */
        height: 500px;
        /* Set a fixed height for all images */
        object-fit: cover;
        /* Ensure images cover the container without stretching */
        border: 1px solid #ddd;
        display: inline-block;
    }

    .card {
        transition: transform 0.1s ease-in-out;
    }

    .card .card-body {
        border-radius: 0px 0px 30px 30px;
    }

    .card:hover {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        transform: scale(1.05);
        /* Adjust the scale factor as needed */
    }

    .images {
        width: 10px;
        height: 10px;
    }

    .category_hdd {
        color: #f8f8f8;
        background-color: #000000;
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
    <!-- ... (Your existing HTML) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top" style="border-radius: 0 0 15px 15px;">
        <!-- Added border-radius here -->

        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard"><img src="images/cyber_-removebg-preview.png"
                    style="width:200px; margin-left: 2vw;"></a>
            <br>
            <form class="d-lg-flex d-xl-flex d-md-flex d-sm-none d-none mb-2" style="margin-left: 10vw;">
                <!-- Desktop Search Bar -->
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    style="width: 47vw; margin-left: -7vw;">
            </form>

            <a href="/cart"><img src="images/shopping-cart.png" style="width: 25px; margin-left: 3.5vw;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                        <!-- mx-auto to center the content -->
                        <li class="nav-item" style="margin-right: 1.5vw;">
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="color: white;">
                                    Categories
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                    <!-- Dropdown content goes here -->
                                    <a class="dropdown-item text-center category_processor"
                                        href="/processor_category">Processor</a>
                                    <a class="dropdown-item text-center category_motherboard"
                                        href="/motherboard_category">Motherboard</a>
                                    <a class="dropdown-item text-center category_ram" href="/ram_category">Ram</a>
                                    <a class="dropdown-item text-center category_gpu" href="/gpu_category">Video
                                        Card</a>
                                    <a class="dropdown-item text-center category_psu" href="/psu_category">Power Supply
                                        Unit</a>
                                    <a class="dropdown-item text-center category_ssd" href="/ssd_category">Solid State
                                        Drive</a>
                                    <a class="dropdown-item text-center category_hdd" href="/hdd_category">Hard
                                        Drive</a>
                                    <a class="dropdown-item text-center category_chassis"
                                        href="/chassis_category">Chassis</a>
                                    <a class="dropdown-item text-center category_monitor"
                                        href="/monitor_category">Monitor</a>
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
                                    <a class="dropdown-item text-center" href="#">INTEL</a>
                                    <a class="dropdown-item text-center" href="#">AMD</a>
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
                                    <a class="dropdown-item text-center" href="/profile">My account</a>
                                    <a class="dropdown-item text-center" href="/my_purchase">My Purchase</a>
                                    <a class="dropdown-item text-center" href="login">Log out</a>
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

    <br>
    <!-- Dashboard Content -->
    <br>
    <div class="container mt-4">
        <div class="row">
            <div class="container" id="contents">
                <header class="d-flex justify-content-between" style="margin-top: 30px;">
                    <h4><i>Hard Disk Drive</i></h4>
                    <br>
                    <br>
                </header>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 1 AMD Radeon RX 7600.jpg"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 2 AMD Radeon RX 6600.png"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 3 Gigabyte NVIDIA GeForce RTX 3050.jpg"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 4 GeForce GTX 1660 SUPER TUF.jpg"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 5 Zotac Gaming GeForce RTX 3050 Twin Edge.jpg"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 6 MSI AMD Radeon RX 6600.jpg"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 1 AMD Radeon RX 7600.jpg"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 2 AMD Radeon RX 6600.png"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 3 Gigabyte NVIDIA GeForce RTX 3050.jpg"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 4 GeForce GTX 1660 SUPER TUF.jpg"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 5 Zotac Gaming GeForce RTX 3050 Twin Edge.jpg"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="/product_Info_SystemUnit_1" style="text-decoration: none; color: inherit;">
                    <div class="card border-dark">
                        <img src="images/GPU/GPU 6 MSI AMD Radeon RX 6600.jpg"
                            class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                        <div class="card-body text-center"
                            style="background-color: rgb(243, 243, 243); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                            <p class="card-text">System Unit</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>



    <!-- Footer Section -->
    <footer class="bg-black text-light text-center py-2">
        <div class="row">
            <div class="col-md text-left ml-md-2">
                <p><a href="/terms" class="text-light">Terms and Conditions</a></p>
            </div>
            <div class="col-md text-center">
                <p>&copy; Cyber Cartel 2024</p>
            </div>
            <div class="col-md text-right mr-md-2">
                <p><a href="https://www.facebook.com/yourpage" class="text-light">Follow us on Facebook</a></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>