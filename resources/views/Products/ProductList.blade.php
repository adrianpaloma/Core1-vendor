<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="css/txt.css">
    <title>Product List</title>
    <style>
        .table img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .btn-primary {
            background-color: #5cb85c;
            border: none;
        }
        .btn-primary:hover {
            background-color: #4cae4c;
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
                <h3 class="mt-4">Product List</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mt-4">
                        <thead class="thead-light">
                            <tr>
                                <th>Image</th>
                                <th>Code</th>
                                <th>Material Name</th>
                                <th>Cost</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Coffee Beans -->
                            <tr>
                                <td><img src="https://www.coffeehit.co.uk/cdn/shop/articles/coffee-beans-101-the-4-most-popular-beans-explained.jpg?v=1708448895&width=1500" alt="Coffee Beans"></td>
                                <td>CB001</td>
                                <td>Coffee Beans</td>
                                <td>₱500.00</td>
                                <td>₱699.00</td>
                                <td>100</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Ground Coffee -->
                            <tr>
                                <td><img src="https://www.frontrangefed.com/wp-content/uploads/2023/10/cold-brew-coffee-3.jpg" alt="Ground Coffee"></td>
                                <td>GC002</td>
                                <td>Ground Coffee</td>
                                <td>₱300.00</td>
                                <td>₱479.00</td>
                                <td>150</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Espresso Pods -->
                            <tr>
                                <td><img src="https://i5.walmartimages.com/asr/889a05f3-c88e-46a0-a920-fca005bbf45c.aa51acc2a1a312ee9ffc8094f7812324.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" alt="Espresso Pods"></td>
                                <td>EP003</td>
                                <td>Espresso Pods</td>
                                <td>₱600.00</td>
                                <td>₱849.00</td>
                                <td>80</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Loose Leaf Tea -->
                            <tr>
                                <td><img src="https://media.twgtea.com/images/default-source/product-images/loose-leaf-teas/4-5-2000x2500/t14_01.tmb-twg_rs450.webp?sfvrsn=a4496484_1" alt="Loose Leaf Tea"></td>
                                <td>LT004</td>
                                <td>Loose Leaf Tea</td>
                                <td>₱700.00</td>
                                <td>₱999.00</td>
                                <td>50</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Tea Bags -->
                            <tr>
                                <td><img src="https://chineseteas101.com/wp-content/uploads/2023/03/tea-bags.jpg" alt="Tea Bags"></td>
                                <td>TB005</td>
                                <td>Tea Bags</td>
                                <td>₱200.00</td>
                                <td>₱349.00</td>
                                <td>200</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Milk and Dairy Alternatives -->
                            <tr>
                                <td><img src="https://colonydiner.com/wp-content/uploads/2023/12/glasses-of-vegan-plant-based-milk-300x300.jpg" alt="Milk & Dairy Alternatives"></td>
                                <td>MD006</td>
                                <td>Milk & Dairy Alternatives</td>
                                <td>₱120.00</td>
                                <td>₱199.00</td>
                                <td>250</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Coffee Machines -->
                            <tr>
                                <td><img src="https://m.media-amazon.com/images/I/6190zcm9RVL._AC_SL1500_.jpg" alt="Coffee Machines"></td>
                                <td>CM007</td>
                                <td>Coffee Machines</td>
                                <td>₱12,000.00</td>
                                <td>₱14,999.00</td>
                                <td>30</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Flavoring Syrups -->
                            <tr>
                                <td><img src="https://www.redber.co.uk/cdn/shop/products/simply-syrups-coffee-standard-caramel-vanilla-hazelnut-3x-1L-2.jpg?v=1655372500&width=322" alt="Flavoring Syrups"></td>
                                <td>FS008</td>
                                <td>Flavoring Syrups</td>
                                <td>₱500.00</td>
                                <td>₱699.00</td>
                                <td>100</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Sweeteners -->
                            <tr>
                                <td><img src="https://static.vecteezy.com/system/resources/previews/025/476/566/non_2x/variety-of-sweeteners-stevia-sugar-pollen-and-honey-ai-generated-photo.jpeg" alt="Sweeteners"></td>
                                <td>SW009</td>
                                <td>Sweeteners</td>
                                <td>₱180.00</td>
                                <td>₱249.00</td>
                                <td>300</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Cups and Lids -->
                            <tr>
                                <td><img src="https://down-ph.img.susercontent.com/file/ph-11134207-7r98o-lkkhy3ffinnabd" alt="Cups & Lids"></td>
                                <td>CL010</td>
                                <td>Cups & Lids</td>
                                <td>₱250.00</td>
                                <td>₱399.00</td>
                                <td>500</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="home/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="home/assets/libs/js/main-js.js"></script>
</body>
</html>
