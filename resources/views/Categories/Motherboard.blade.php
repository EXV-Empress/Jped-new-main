<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cyber Cartel | Motherboard</title>
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
        flex-shrink: 0;
        margin-top:auto;
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

    .category_motherboard {
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
    @include('Layouts.navbar')

    <br>
    <!-- Dashboard Content -->
    <br>
    <div class="container mt-4">
        <div class="row">
            <div class="container" id="contents">
                <header class="d-flex justify-content-between" style="margin-top: 30px;">
                    <h2>
                        <p>Motherboard</p>
                    </h2>
                    <br>
                    <br>
                </header>
            </div>


            @foreach($Motherboard as $item)
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                <a href="{{url('product_demo/' . $item->id . '')}}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="border-radius: 30px 30px 30px 30px;">
                        <img src="{{ asset($item->photo) }}" class="card-img-top border-2 img-fluid" alt="Card Image"
                            style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                        <div class="card-body text-center"
                            style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                            <!-- Removed border-radius from the img element -->
                            <h5 class="card-subtitle mb-0 mt-0">
                                <p>{{$item->name}}</p>
                            </h5>
                            <p class="card-text">{{$item->category}}</p>
                            <h6 class="card-subtitle mb-0 mt-0">₱{{number_format($item->price)}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>

    <!-- Footer Section -->
    @include('Layouts.footer2')


    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>