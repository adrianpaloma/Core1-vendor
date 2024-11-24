<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Manage Returns</title>
    <style>
        .status-badge {
            font-size: 0.9rem;
            padding: 0.3rem 0.6rem;
        }
        .action-btn {
            font-size: 0.8rem;
            margin-right: 0.5rem;
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

                    <!-- Start Manage Returns Section -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Manage Returns</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Return ID</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Return Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Sample rows for return requests -->
                                            <tr>
                                                <td>#R001</td>
                                                <td>John Doe</td>
                                                <td>Coffee Beans</td>
                                                <td>2024-11-10</td>
                                                <td><span class="badge badge-warning status-badge">Pending</span></td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-success btn-sm">Approve</a>
                                                    <a href="#" class="btn btn-outline-danger btn-sm">Reject</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#R002</td>
                                                <td>Jane Smith</td>
                                                <td>Espresso Machine</td>
                                                <td>2024-11-12</td>
                                                <td><span class="badge badge-success status-badge">Approved</span></td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#R003</td>
                                                <td>Mike Johnson</td>
                                                <td>Milk Frother</td>
                                                <td>2024-11-14</td>
                                                <td><span class="badge badge-danger status-badge">Rejected</span></td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#R004</td>
                                                <td>Sarah Lee</td>
                                                <td>French Press</td>
                                                <td>2024-11-16</td>
                                                <td><span class="badge badge-info status-badge">Under Review</span></td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-success btn-sm">Approve</a>
                                                    <a href="#" class="btn btn-outline-danger btn-sm">Reject</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Manage Returns Section -->

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
