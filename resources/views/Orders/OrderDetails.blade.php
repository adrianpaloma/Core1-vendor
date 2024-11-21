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
    <title>Order Details</title>
    <style>
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e0e0e0;
        }
        .table {
            margin-bottom: 0;
        }
        .section-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #495057;
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

                    <!-- Order Details Section -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Order Details - Order ID: #12345</h5>
                                </div>
                                <div class="card-body">
                                    
                                    <!-- Customer Info -->
                                    <div class="mb-4">
                                        <p class="section-title">Customer Information</p>
                                        <ul class="list-unstyled">
                                            <li><strong>Name:</strong> John Doe</li>
                                            <li><strong>Email:</strong> johndoe@example.com</li>
                                            <li><strong>Phone:</strong> +1 234-567-890</li>
                                            <li><strong>Address:</strong> 123 Coffee Lane, Espresso City, CA</li>
                                        </ul>
                                    </div>

                                    <!-- Order Summary -->
                                    <div class="mb-4">
                                        <p class="section-title">Order Summary</p>
                                        <ul class="list-unstyled">
                                            <li><strong>Order Date:</strong> 2024-11-12</li>
                                            <li><strong>Status:</strong> <span class="badge badge-success">Shipped</span></li>
                                            <li><strong>Payment Method:</strong> Credit Card (**** **** **** 1234)</li>
                                            <li><strong>Total Amount:</strong> $250</li>
                                        </ul>
                                    </div>

                                    <!-- Ordered Items -->
                                    <div class="mb-4">
                                        <p class="section-title">Ordered Items</p>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Price</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Espresso Beans</td>
                                                    <td>2</td>
                                                    <td>$50</td>
                                                    <td>$100</td>
                                                </tr>
                                                <tr>
                                                    <td>French Press</td>
                                                    <td>1</td>
                                                    <td>$60</td>
                                                    <td>$60</td>
                                                </tr>
                                                <tr>
                                                    <td>Organic Milk</td>
                                                    <td>3</td>
                                                    <td>$20</td>
                                                    <td>$60</td>
                                                </tr>
                                                <tr>
                                                    <td>Syrup - Vanilla</td>
                                                    <td>2</td>
                                                    <td>$15</td>
                                                    <td>$30</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="text-right"><strong>Total</strong></td>
                                                    <td><strong>$250</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Order Details Section -->

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
