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
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card {
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .btn-primary {
            background-color: #5cb85c;
            border: none;
        }
        .btn-primary:hover {
            background-color: #4cae4c;
        }
        .price {
            font-size: 1.25rem;
            color: #333;
            font-weight: bold;
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
                <div class="d-flex flex-wrap justify-content-center mt-4">
                    
                    <div class="d-flex flex-wrap justify-content-center mt-4">
                        <!-- Coffee Beans -->
                        <div class="card m-3" style="width: 18rem;">
                            <img src="https://www.coffeehit.co.uk/cdn/shop/articles/coffee-beans-101-the-4-most-popular-beans-explained.jpg?v=1708448895&width=1500" class="card-img-top" alt="Coffee Beans">
                            <div class="card-body text-center">
                                <h5 class="card-title">Coffee Beans</h5>
                                <p class="card-text">High-quality coffee beans for brewing the perfect cup.</p>
                                <p class="price">₱699.00</p> <!-- Price in Peso -->
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    
                        <!-- Ground Coffee -->
                        <div class="card m-3" style="width: 18rem;">
                            <img src="https://www.frontrangefed.com/wp-content/uploads/2023/10/cold-brew-coffee-3.jpg" class="card-img-top" alt="Ground Coffee">
                            <div class="card-body text-center">
                                <h5 class="card-title">Ground Coffee</h5>
                                <p class="card-text">Freshly ground coffee for a convenient brew.</p>
                                <p class="price">₱479.00</p> <!-- Price in Peso -->
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    
                        <!-- Espresso Pods -->
                        <div class="card m-3" style="width: 18rem;">
                            <img src="https://i5.walmartimages.com/asr/889a05f3-c88e-46a0-a920-fca005bbf45c.aa51acc2a1a312ee9ffc8094f7812324.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" class="card-img-top" alt="Espresso Pods">
                            <div class="card-body text-center">
                                <h5 class="card-title">Espresso Pods</h5>
                                <p class="card-text">Espresso pods in various flavors and strengths.</p>
                                <p class="price">₱849.00</p> <!-- Price in Peso -->
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    
                        <!-- Loose Leaf Tea -->
                        <div class="card m-3" style="width: 18rem;">
                            <img src="https://media.twgtea.com/images/default-source/product-images/loose-leaf-teas/4-5-2000x2500/t14_01.tmb-twg_rs450.webp?sfvrsn=a4496484_1" class="card-img-top" alt="Loose Leaf Tea">
                            <div class="card-body text-center">
                                <h5 class="card-title">Loose Leaf Tea</h5>
                                <p class="card-text">Premium loose leaf teas in a variety of flavors.</p>
                                <p class="price">₱999.00</p> <!-- Price in Peso -->
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    
                        <!-- Tea Bags -->
                        <div class="card m-3" style="width: 18rem;">
                            <img src="https://chineseteas101.com/wp-content/uploads/2023/03/tea-bags.jpg" class="card-img-top" alt="Tea Bags">
                            <div class="card-body text-center">
                                <h5 class="card-title">Tea Bags</h5>
                                <p class="card-text">Convenient tea bags in a variety of flavors.</p>
                                <p class="price">₱349.00</p> <!-- Price in Peso -->
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    
                        <!-- Milk and Dairy Alternatives -->
                        <div class="card m-3" style="width: 18rem;">
                            <img src="https://colonydiner.com/wp-content/uploads/2023/12/glasses-of-vegan-plant-based-milk-300x300.jpg" class="card-img-top" alt="Milk and Dairy Alternatives">
                            <div class="card-body text-center">
                                <h5 class="card-title">Milk & Dairy Alternatives</h5>
                                <p class="card-text">Regular, almond, oat, and other plant-based milk options.</p>
                                <p class="price">₱199.00</p> <!-- Price in Peso -->
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    
                        <!-- Coffee Machines -->
                        <div class="card m-3" style="width: 18rem;">
                            <img src="https://m.media-amazon.com/images/I/6190zcm9RVL._AC_SL1500_.jpg" class="card-img-top" alt="Coffee Machines">
                            <div class="card-body text-center">
                                <h5 class="card-title">Coffee Machines</h5>
                                <p class="card-text">Professional coffee machines for reliable, high-quality brews.</p>
                                <p class="price">₱14,999.00</p> <!-- Price in Peso -->
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    
                        <!-- Flavoring Syrups -->
                        <div class="card m-3" style="width: 18rem;">
                            <img src="https://www.redber.co.uk/cdn/shop/products/simply-syrups-coffee-standard-caramel-vanilla-hazelnut-3x-1L-2.jpg?v=1655372500&width=322" class="card-img-top" alt="Flavoring Syrups">
                            <div class="card-body text-center">
                                <h5 class="card-title">Flavoring Syrups</h5>
                                <p class="card-text">Vanilla, caramel, hazelnut, and seasonal flavors.</p>
                                <p class="price">₱699.00</p> <!-- Price in Peso -->
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    
                        <!-- Sweeteners -->
                        <div class="card m-3" style="width: 18rem;">
                            <img src="https://static.vecteezy.com/system/resources/previews/025/476/566/non_2x/variety-of-sweeteners-stevia-sugar-pollen-and-honey-ai-generated-photo.jpeg" class="card-img-top" alt="Sweeteners">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sweeteners</h5>
                                <p class="card-text">Sugar, stevia, honey, and other options.</p>
                                <p class="price">₱249.00</p> <!-- Price in Peso -->
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    
                        <!-- Cups and Lids -->
                        <div class="card m-3" style="width: 18rem;">
                            <img src="https://down-ph.img.susercontent.com/file/ph-11134207-7r98o-lkkhy3ffinnabd" class="card-img-top" alt="Cups & Lids">
                            <div class="card-body text-center">
                                <h5 class="card-title">Cups & Lids</h5>
                                <p class="card-text">Disposable cups and lids for serving hot beverages.</p>
                                <p class="price">₱399.00</p> <!-- Price in Peso -->
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>

                    </div>
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
