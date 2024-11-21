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
    <title>Add New Product</title>
    <style>
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e0e0e0;
        }
        .form-control {
            font-size: 0.9rem;
        }
        .btn-primary, .btn-secondary {
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
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

                    <!-- Start Add New Product Section -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Add New Product</h5>
                                </div>
                                <div class="card-body">
                                    <form action="/products/add" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="productName">Product Name</label>
                                            <input type="text" class="form-control" id="productName" name="productName" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="productDescription">Description</label>
                                            <textarea class="form-control" id="productDescription" name="productDescription" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="form-control" id="category" name="category">
                                                <option>Coffee Beans</option>
                                                <option>Espresso Machines</option>
                                                <option>Accessories</option>
                                                <option>Milk Frothers</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price ($)</label>
                                            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="stock">Stock Quantity</label>
                                            <input type="number" class="form-control" id="stock" name="stock" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="productImage">Upload Image</label>
                                            <input type="file" class="form-control-file" id="productImage" name="productImage">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Product</button>
                                        <a href="/products" class="btn btn-secondary">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Add New Product Section -->

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
