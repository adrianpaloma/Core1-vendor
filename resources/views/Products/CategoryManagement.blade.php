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
    <title>Category Management</title>
    <style>
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e0e0e0;
        }
        .btn {
            font-size: 0.9rem;
        }
        .form-control {
            font-size: 0.9rem;
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

                    <!-- Start Category Management Section -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0">Category Management</h5>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">Add New Category</button>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Category ID</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Example category rows -->
                                            <tr>
                                                <td>1</td>
                                                <td>Coffee Beans</td>
                                                <td>Various types of coffee beans.</td>
                                                <td>
                                                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editCategoryModal">Edit</button>
                                                    <button class="btn btn-outline-danger btn-sm">Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Espresso Machines</td>
                                                <td>Machines for making espresso drinks.</td>
                                                <td>
                                                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#editCategoryModal">Edit</button>
                                                    <button class="btn btn-outline-danger btn-sm">Delete</button>
                                                </td>
                                            </tr>
                                            <!-- Add more categories as needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Category Management Section -->

                    <!-- Add Category Modal -->
                    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/categories/add" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="categoryName">Category Name</label>
                                            <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="categoryDescription">Description</label>
                                            <textarea class="form-control" id="categoryDescription" name="categoryDescription" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Add Category Modal -->

                    <!-- Edit Category Modal -->
                    <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/categories/edit" method="POST">
                                        @csrf
                                        <input type="hidden" id="editCategoryId" name="categoryId">
                                        <div class="form-group">
                                            <label for="editCategoryName">Category Name</label>
                                            <input type="text" class="form-control" id="editCategoryName" name="categoryName" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editCategoryDescription">Description</label>
                                            <textarea class="form-control" id="editCategoryDescription" name="categoryDescription" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Edit Category Modal -->

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
