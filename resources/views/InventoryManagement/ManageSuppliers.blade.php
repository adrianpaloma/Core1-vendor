<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Manage Suppliers</title>
    <style>
        .card-header {
            background-color: #f3f4f6;
            border-bottom: 1px solid #e1e4e8;
        }
        .card-body {
            padding: 1rem;
        }
        .supplier-card {
            transition: box-shadow 0.3s ease;
        }
        .supplier-card:hover {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
        .btn-primary, .btn-secondary {
            font-size: 0.9rem;
        }
        .badge-status {
            font-size: 0.8rem;
            padding: 0.4rem 0.6rem;
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
                
                <!-- Start Manage Suppliers Section -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Manage Suppliers</h5>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#addSupplierModal">Add New Supplier</button>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Example Supplier Cards -->
                                    <div class="col-md-4">
                                        <div class="card supplier-card mb-4">
                                            <div class="card-body">
                                                <h6 class="card-title">Acme Coffee Supplies</h6>
                                                <p class="mb-2"><strong>Contact:</strong> John Doe</p>
                                                <p class="mb-2"><strong>Email:</strong> john@acmesupplies.com</p>
                                                <p class="mb-2"><strong>Status:</strong> 
                                                    <span class="badge badge-success badge-status">Active</span>
                                                </p>
                                                <div class="d-flex justify-content-between mt-3">
                                                    <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-sm">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card supplier-card mb-4">
                                            <div class="card-body">
                                                <h6 class="card-title">Global Coffee Traders</h6>
                                                <p class="mb-2"><strong>Contact:</strong> Sarah Lee</p>
                                                <p class="mb-2"><strong>Email:</strong> sarah@globalcoffee.com</p>
                                                <p class="mb-2"><strong>Status:</strong> 
                                                    <span class="badge badge-warning badge-status">Pending</span>
                                                </p>
                                                <div class="d-flex justify-content-between mt-3">
                                                    <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-sm">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Additional suppliers can be added similarly -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Manage Suppliers Section -->

                <!-- Add Supplier Modal -->
                <div class="modal fade" id="addSupplierModal" tabindex="-1" role="dialog" aria-labelledby="addSupplierModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addSupplierModalLabel">Add New Supplier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/suppliers/add" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="supplierName">Supplier Name</label>
                                        <input type="text" class="form-control" id="supplierName" name="supplierName" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="contactName">Contact Name</label>
                                        <input type="text" class="form-control" id="contactName" name="contactName">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Supplier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Add Supplier Modal -->

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
