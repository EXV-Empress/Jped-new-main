<nav class="navbar navbar-expand-lg navbar-dark fixed-top"
    style="background-color: black; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);">
    <!-- Added border-radius here -->

     <div class="container-fluid">
     <a class="navbar-brand" href="/">
        <img src="{{ asset('images/logoP.png') }}" style="height: 100%; max-height: 50px; object-fit: contain; margin-left: 2vw;">
    </a>

        <br>
    </div>
    @auth
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

        <li class="nav-item" style="margin-right: 40px; margin-top: 5px;">
            <a href="/book" style="text-decoration: none; color: white;">Book</a>
        </li>

            <!-- mx-auto to center the content -->
            <!--<li class="nav-item" style="margin-right: 1.5vw;">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="color: white; ">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoriesDropdown" style="margin-left: -2vw;">
                        <!-- Dropdown content goes here
                        <a class="dropdown-item text-center" href="/chassis_category">Chassis</a>
                        <a class="dropdown-item text-center" href="/processor_category">Processor</a>
                        <a class="dropdown-item text-center" href="/motherboard_category">Motherboard</a>
                        <a class="dropdown-item text-center" href="/ram_category">Ram</a>
                        <a class="dropdown-item text-center" href="/gpu_category">Graphics Card</a>
                        <a class="dropdown-item text-center" href="/psu_category">Power Supply Unit</a>
                        <a class="dropdown-item text-center" href="/storage_category">Storage</a>
                    </div>
                </div>
            </li>-->

            <li class="nav-item" style="margin-right: 3vw;">
                <div class=" nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="color: white; ">
                        {{auth()->user()->name}}
                    </a>
                    <div class="dropdown-menu ml-auto mr-auto" aria-labelledby="userDropdown"
                        style="margin-left: -2.5vw;">
                        <!-- Dropdown content goes here -->
                        <a class=" dropdown-item text-center" href="/profile">My account</a>
                        <a class="dropdown-item text-center" href="{{route('logout')}}">Log out</a>
                    </div>

                </div>
            </li>


        </ul>
    </div>


    @else
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <div class="container-fluid">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item"
                    style="margin-left: 50px; margin-right: 50px; margin-top: 3px; color: white; ">
                    <a class="nav-link" aria-current="page" href="login" style="color: white;">Login</a>
                </li>
                <li class="nav-item" style="margin-right: 40px; margin-top: 3px; color: white;">
                    <a class="nav-link" aria-current="page" href="signup" style="color: white;">Signup</a>
                </li>
                <li class="nav-item" style="margin-right: 50px; margin-top: 3px; color: white;">
                    <a class="nav-link" aria-current="page" href="/adminlogin" style="color: white;">Admin</a>
                </li>
            </ul>
        </div>
        @endauth

        <button class="navbar-toggler ms-auto mb-0" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        </div>
</nav>