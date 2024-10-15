<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="/public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cyber Cartel | Product Info</title>
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
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

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html,
    body {
        font-family: "Spoof Trial Thin";
        overflow-x: hidden;
        flex-direction: column;
        display:flex;
    }

    .img {
        width: 100%;
        display: block;
    }


    .navbar-brand img {
        transition: transform 0.3s ease-in-out;
        /* Apply the transition to the transform property */
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
        /* Increase the scale on hover */
    }

    .main-wrapper {
        min-height: 100vh;
        background-color: #eeeeee;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        flex: 1;
        padding-top:20px;
        padding-bottom:20px;
    }
    footer {
        flex-shrink: 0;
        margin-top:auto;
    }

    .product-div {
        margin: 1rem 0;
        padding: 2rem 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        background-color: #ffffff;
        border-radius: 50px;
        column-gap: 10px;
    }

    .product-div-two {
        text-align: center;
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(2);
        background-color: #ffffff;
        border-radius: 50px;
        column-gap: 90px;
    }

    .product-div-left {
        padding: 20px;
    }

    .product-div-right {
        padding: 20px;
    }

    .img-container img {
        width: 100%;
        margin: 0 auto;
    }

    .hover-container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        margin-top: 32px;
    }

    .hover-container div {
        border: 2px solid rgba(252, 160, 175, 0.7);
        padding: 1rem;
        border-radius: 3px;
        margin: 0 4px 8px 4px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .active {
        border-color: rgb(0, 162, 255) !important;
    }

    .hover-container div:hover {
        border-color: rgb(255, 145, 163);
    }

    .hover-container div img {
        width: 50px;
        cursor: pointer;
    }

    .product-div-right span {
        display: block;
    }

    .product-name {
        font-size: 26px;
        margin-bottom: 22px;
        font-weight: 700;
        letter-spacing: 1px;
        opacity: 0.9;
    }

    .product-price {
        font-weight: 700;
        font-size: 24px;
        opacity: 0.9;
        font-weight: 500;
    }

    .product-rating {
        display: flex;
        align-items: center;
        margin-top: 12px;
    }

    .product-rating span {
        margin-right: 6px;
    }

    .product-description {
        font-weight: 18px;
        line-height: 1.6;
        font-weight: 300;
        opacity: 0.9;
    }

    .product-description-one {
        font-weight: 18px;
        line-height: 1.6;
        font-weight: 300;
        opacity: 0.9;
    }


    .btn-groups button {
        display: inline-block;
        font-size: 16px;
        font-family: inherit;
        text-transform: uppercase;
        padding: 15px 20px;
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-groups button .fas {
        margin-right: 8px;
    }

    .add-cart-btn {
        border-radius: 50px;
        background-color: #937952;
        border: 2px solid #4a4a4a;
        margin-right: 8px;
    }

    .add-cart-btn:hover {
        background-color: #fff;
        color: #000000;
    }

    .buy-now-btn {
        border-radius: 50px;
        background-color: #4d9584;
        border: 2px solid #4a4a4a;
    }

    .buy-now-btn:hover {
        background-color: #fff;
        color: #000;
    }


    .product-details-box {
        text-align: center;
        margin: auto;
        max-width: 1000px;
        padding: 50px;
        background-color: #ff0000d6;
        border-radius: 50px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    @media screen and (max-width: 992px) {
        .product-div {
            grid-template-columns: 100%;
        }

        .product-div-right {
            text-align: center;
        }

        .product-rating {
            justify-content: center;
        }

        .product-description {
            max-width: 400px;
            margin-right: auto;
            margin-left: auto;
        }
    }

    /* Reviews Section */
    .reviews-section {
        padding: 100px;
        background-color: #ffffff;
        border-radius: 70px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .reviews-section h2 {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    /* Individual Review Comments */
    .review-comment {
        margin-bottom: 20px;
        border-bottom: 1px solid #000000;
        padding-bottom: 15px;
    }

    .user-info {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .user-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .user-info span {
        font-weight: 600;
    }

    .review-text {
        font-size: 16px;
        line-height: 1.6;
        opacity: 0.9;
    }

    /* Comment Form for New Reviews */
    .comment-form {
        margin-top: 30px;
    }

    .comment-form h3 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 15px;
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->

    <!-- ... (Your existing HTML) -->

    @include('Layouts.navbar')

    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="container">
    <div class="main-wrapper" style=" background-color: white; margin-top:70px">
    <div class="container" style="border: none; border-radius: 50px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
            <div class="product-div">
                <div class="product-div-left">
                    <div class="img-container">
                        <img src="{{$product-> photo}}"/>
                    </div>
                </div>
                <div class="product-div-right" style="margin-top: 100px;">
                        @if(session()->has('success'))
                        <div class ="alert alert-success">{{session('success')}}</div>
                        @endif
                    <span class="product-name">{{$product-> name}}</span>
                    <span class="product-price">₱{{number_format($product-> price)}}</span>
                    <p class="product-description"></p>
                    <form method ="POST">
                    @csrf
                    <div class="btn-groups">
                            <button class="add-cart-btn" formaction="{{url('addcart',$product->id)}}">
                                <i class="bx bxs-cart-add"></i>  add to cart
                            </button>
                            <button class="buy-now-btn" formaction="{{url('buynow',$product->id)}}">
                                <i class="bx bxs-wallet"></i>  buy now
                            </button>
                    </form>
                    </div>
                </div>
            </div>

            <!-- Additional box for details -->
            <div  style=" background-color: white; margin-bottom: 20px">
    <div class="container" style="border-top: 1px solid #ccc;">
        <div class="product-div-two" style="text-align: left;">
            <div class="product-div-left">
                <h4 style ="font-weight;bold">Product Details</h4>
                <p class="product-description-one" style="white-space:pre-line;">
                    {{$product->details}}
                </p>
            </div>
        </div>
    </div>
</div>
            </div>
    </div>
</div>





    <!-- Footer Section -->
@include('Layouts.footer2')

    <script>
    const allHoverImages = document.querySelectorAll(".hover-container div img");
    const imgContainer = document.querySelector(".img-container");

    window.addEventListener("DOMContentLoaded", () => {
        allHoverImages[0].parentElement.classList.add("active");
    });

    allHoverImages.forEach((image) => {
        image.addEventListener("mouseover", () => {
            imgContainer.querySelector("img").src = image.src;
            resetActiveImg();
            image.parentElement.classList.add("active");
        });
    });

    function resetActiveImg() {
        allHoverImages.forEach((img) => {
            img.parentElement.classList.remove("active");
        });
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>