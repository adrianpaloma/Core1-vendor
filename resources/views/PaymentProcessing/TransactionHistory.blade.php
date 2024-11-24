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
    <title>Transaction History</title>
    <style>
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e0e0e0;
        }
        .transaction-table {
            margin-bottom: 0;
        }
        .badge {
            font-size: 0.9rem;
        }
        .transaction-icon {
            font-size: 1.3rem;
            vertical-align: middle;
            margin-right: 0.5rem;
        }
        .transaction-amount {
            font-weight: 600;
        }
        .credit {
            color: #28a745;
        }
        .debit {
            color: #dc3545;
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
                
                <!-- Start Transaction History Section -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Transaction History</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover transaction-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Transaction ID</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example transaction rows -->
                                        <tr>
                                            <td>2024-11-10</td>
                                            <td>#TX12345</td>
                                            <td><i class="fa fa-arrow-down transaction-icon debit"></i>Payment</td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td class="transaction-amount debit">₱250</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2024-11-11</td>
                                            <td>#TX12346</td>
                                            <td><i class="fa fa-arrow-up transaction-icon credit"></i>Deposit</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td class="transaction-amount credit">₱500</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2024-11-12</td>
                                            <td>#TX12347</td>
                                            <td><i class="fa fa-arrow-down transaction-icon debit"></i>Purchase</td>
                                            <td><span class="badge badge-danger">Failed</span></td>
                                            <td class="transaction-amount debit">₱75</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2024-11-13</td>
                                            <td>#TX12348</td>
                                            <td><i class="fa fa-arrow-up transaction-icon credit"></i>Refund</td>
                                            <td><span class="badge badge-info">Processing</span></td>
                                            <td class="transaction-amount credit">₱120</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Transaction History Section -->

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
