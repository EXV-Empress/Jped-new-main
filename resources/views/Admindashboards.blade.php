<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="{{ asset ('assests/css/bootstrap.css') }}">
    <link rel="stylesheet" href="assets/css/analytics.css" />
    <script src="{{ asset('assests/js/jquery.js') }}"></script>
    <title>Dashboard</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
    <a href="/" class="brand">
            <img src="images/black 2.png" alt="Cyber Cartel Icon"
                style="width: 50px; height: 50px; margin-left: 30px; margin-top: 20px;">
            <span class="text" style="margin-top: 20px;">Cyber Cartel</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="{{ url('/admindashboards') }}">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dashboards</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/adminanalytics') }}">
                    <i class="bx bxs-analyse"></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admincustomers') }}">
                    <i class="bx bxs-group"></i>
                    <span class="text">Customers</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/adminmanagements') }}">
                    <i class="bx bxs-data"></i>
                    <span class="text">Product Management</span>
                </a>
            </li>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <li>
                <a class="dropdown-item text-center" href="{{route('logout')}}"  style="color: red;">
                    <i class="bx bxs-log-out"></i> Log out
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb"></ul>
                </div>
            </div>

            <ul class="box-info">
            <li>
                    <i class="bx bxs-calendar-check" ></i>
                    <span class="text">
                        <h3>Products</h3>
                        <p>Total For Sale: {{number_format($products)}}</p>

                        <p>Total Sales: ₱{{number_format($boughtTotal)}}</p>
                    
                            <p>Total Sales:₱0</p>
                    
                    </span>
                </li>
                <li>
                    <i class="bx bxs-group"></i>
                    <span class="text">
                        <h3>Users</h3>
                        <p>Total Users: {{number_format($usercount)}}</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-cart-add"></i>
                    <span class="text">
                    </span>
                </li>
            </ul>
            
            <ul class="box-info">
                <li>
                <span><h3>New Customers</h3></span>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <div>
                        <tbody>
                            @foreach ($user->slice(0,5) as $item)
                            <tr>
                                <td>{{$item -> id }}</td>
                                <td>{{$item -> name}}</td>
                                <td>{{$item -> email}}</td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </div>
                    </table>
                </li>
            </ul>
        </main>
    </section>
</body>

</html>