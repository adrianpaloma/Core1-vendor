<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Order List</title>
    <style>
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e0e0e0;
        }
        .table {
            margin-bottom: 0;
        }
        .badge {
            font-size: 0.9rem;
        }
        .status-icon {
            font-size: 1.2rem;
            vertical-align: middle;
            margin-right: 0.3rem;
        }
    </style>
</head>
<body>

    <div class="dashboard-main-wrapper">
        @include('home.header')
        @include('home.sidenav')

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">
                    
                    <!-- Start Order List Section -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Order List</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Example order rows -->
                                            <tr>
                                                <td>#12345</td>
                                                <td>John Doe</td>
                                                <td>2024-11-12</td>
                                                <td><span class="badge badge-success"><i class="fa fa-check-circle status-icon"></i>Shipped</span></td>
                                                <td>$250</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-sm">Edit</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#12346</td>
                                                <td>Jane Smith</td>
                                                <td>2024-11-13</td>
                                                <td><span class="badge badge-warning"><i class="fa fa-clock status-icon"></i>Pending</span></td>
                                                <td>$150</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-sm">Edit</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#12347</td>
                                                <td>Mike Johnson</td>
                                                <td>2024-11-14</td>
                                                <td><span class="badge badge-danger"><i class="fa fa-times-circle status-icon"></i>Cancelled</span></td>
                                                <td>$320</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-sm">Edit</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#12348</td>
                                                <td>Sarah Lee</td>
                                                <td>2024-11-15</td>
                                                <td><span class="badge badge-info"><i class="fa fa-cog status-icon"></i>Processing</span></td>
                                                <td>$180</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-sm">Edit</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Order List Section -->

                </div>
            </div>
        </div>

        @include('home.footer')
    </div>

    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="home/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="home/assets/libs/js/main-js.js"></script>
</body>
</html>
