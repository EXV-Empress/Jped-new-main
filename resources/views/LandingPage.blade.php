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
            background-color: #ffffff
        }

        main {
            flex: 1;
        }

        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
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

        .card:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            transform: scale(1.1);
            /* Adjust the scale factor as needed */
        }

        .images {
            width: 10px;
            height: 10px;
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
    @include('Layouts.navbar')





    <!-- Header Section -->
    <header style="margin-top: 110px">
        <div class="container" id="contents">
            <h1> Top Products</h1>
        </div>
    </header>

    <!-- Dashboard Content -->
    <div class="slider-frame">
        <div class="slide-images">
            <div class="img-container">
                <img src="images/image 1.jpg" alt="Slide 1">
            </div>
            <div class="img-container">
                <img src="{{ URL('images/intel 1.jpg') }}" alt="Slide 2">
            </div>
            <div class="img-container">
                <img src="{{ URL('images/gpu 1.jpg') }}" alt="Slide 3">
            </div>
            <div class="img-container">
                <img src="{{ URL('images/ram.jpg') }}" alt="Slide 4">
            </div>
            <div class="img-container">
                <img src="{{ URL('images/motherboard.png') }}" alt="Slide 5">
            </div>
        </div>
        <br>

        <!-- Pre-Built Units -->
        <div class="container mt-4">
            <div class="row">
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4>
                            <p>Pre-Built Units</p>
                        </h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 1.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 2.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 3.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 4.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 5.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Pre-Built/sysu 6.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>




                <!-- Processor -->
                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4>
                            <p>Processor</p>
                        </h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Amd/amd 1.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>AMD RYZEN 5</p>
                                </h5>
                                <p class="card-text">Processor</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱46,OOO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Intel/cpu 2.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Intel Core i5</p>
                                </h5>
                                <p class="card-text">Processor</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱15,995</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Amd/cpu 3.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Ryzen 5 5OOO</p>
                                </h5>
                                <p class="card-text">Processor</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱8,897</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Intel/cpu 4.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Intel Core i5</p>
                                </h5>
                                <p class="card-text">Processor</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱8,6O5</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Amd/cpu 5.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/CPU/Intel/cpu 6.jpg" class="card-img-top border-top border-2 rounded-top"
                                alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0">
                                    <p>Gaming Pc</p>
                                </h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,5OO</h6>
                            </div>
                        </div>
                    </a>
                </div>










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>MotherBoard</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
                                class="card-img-top border-top border-2 rounded-top" alt="Card Image">
                            <div class="card-body text-center"
                                style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                                <!-- Removed border-radius from the img element -->
                                <h5 class="card-subtitle mb-0 mt-0"><i>Gaming Pc</i></h5>
                                <p class="card-text">System Unit</p>
                                <h6 class="card-subtitle mb-0 mt-0">₱12,500</h6>
                            </div>
                        </div>
                    </a>
                </div>










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Graphics Card</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
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










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Ram</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 1 G.Skill Trident Z5 Neo RGB DDR5-6000.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 2 Patriot Viper Steel DDR4-4400.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 3 Patriot Viper RGB DDR4-3600.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 4 Patriot Viper 4 DDR4-3400.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 5 Corsair Vengeance RGB Pro DDR4-3200.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/Ram/Ram 6 G.Skill Trident Z Neo DDR4-3600.jpg"
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










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>Power Supply</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 1 Corsair RM750x.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 2 Seasonic Prime Titanium TX-1000.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 3 XPG Pylon 450.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 4 BeQuiet! Pure Power 11 FM 550W.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 5 Corsair AX1600i.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/PSU/PSU 6 silverstone sx1000 lpt 1000w 80 plus platinum.jpg"
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










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>MotherBoard</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
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










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>MotherBoard</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
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










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>MotherBoard</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
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










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>MotherBoard</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
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










                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>MotherBoard</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
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



                <div class="container" id="contents">
                    <header class="d-flex justify-content-between" style="margin-top: 50px;">
                        <h4><i>MotherBoard</i></h4>
                        <br>
                        <a href="#">
                            <p style="margin-top:15px ">See all</p>
                        </a>
                    </header>
                </div>


                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 1 ASUS ROG Strix Z690-E Gaming Wi-Fi DDR5.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 2 ASUS TUF Gaming B550-PLUS.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 3 ASUS Prime X670-P.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 4 GIGABYTE TRX40 AORUS Master.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 5 ASUS ROG Strix Maximus Z790 Hero.jpg"
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
                    <a href="/product_demo" style="text-decoration: none; color: inherit;">
                        <div class="card border-dark">
                            <img src="images/MotherBoard/Mobo 6 Gigabyte B650 AORUS Elite AX.jpg"
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
                    <p>&copy; 2023 Login Page. All rights reserved.</p>
                </div>
                <div class="col-md text-right mr-md-2">
                    <p><a href="https://www.facebook.com/yourpage" class="text-light">Follow us on Facebook</a></p>
                </div>
            </div>
        </footer>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const slideContainer = document.querySelector(".slide-images");
                const slideImages = document.querySelector(".slide-images");
                let currentIndex = 0;
                let startX;
                let isSwiping = false;

                function showSlide(index) {
                    const translateValue = -index * 100 + "%";
                    slideImages.style.transform = "translateX(" + translateValue + ")";
                }

                function nextSlide() {
                    currentIndex = (currentIndex + 1) % 5;
                    showSlide(currentIndex);
                }

                function prevSlide() {
                    currentIndex = (currentIndex - 1 + 5) % 5; // Ensure positive index
                    showSlide(currentIndex);
                }

                function handleStart(event) {
                    if (event.type === "touchstart") {
                        startX = event.touches[0].clientX;
                    } else {
                        startX = event.clientX;
                    }
                    isSwiping = true;
                    event.preventDefault(); // Prevent default behavior to avoid page scrolling
                }

                function handleMove(event) {
                    if (!isSwiping) return;

                    const currentX = event.type === "touchmove" ? event.touches[0].clientX : event.clientX;
                    const diffX = currentX - startX;

                    if (Math.abs(diffX) > 50) { // Adjust the sensitivity as needed
                        if (diffX > 0) {
                            prevSlide();
                        } else {
                            nextSlide();
                        }
                        startX = null;
                        isSwiping = false;
                    }
                    event.preventDefault(); // Prevent default behavior to avoid page scrolling
                }

                function handleEnd() {
                    startX = null;
                    isSwiping = false;
                }

                slideContainer.addEventListener("touchstart", handleStart);
                slideContainer.addEventListener("touchmove", handleMove);
                slideContainer.addEventListener("touchend", handleEnd);

                slideContainer.addEventListener("mousedown", handleStart);
                slideContainer.addEventListener("mousemove", handleMove);
                slideContainer.addEventListener("mouseup", handleEnd);

                // Automatic slideshow
                setInterval(nextSlide, 5000);

                // Optional: Pause slideshow on hover
                slideContainer.addEventListener("mouseenter", function () {
                    clearInterval(intervalId);
                });

                slideContainer.addEventListener("mouseleave", function () {
                    intervalId = setInterval(nextSlide, 5000);
                });
            });
        </script>
</body>

</html>