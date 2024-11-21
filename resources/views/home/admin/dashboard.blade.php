<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS and other styling libraries -->
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/circular-std/style.css">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
    <title>Vendor Dashboard</title>
    <style>
        /* General Styles */
        body {
            background-color: #f7f8fa;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 2rem;
            font-weight: bold;
        }

        .sales-analytics {
            height: 250px;
        }

        .trending-coffee img {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .trending-coffee .coffee-item:hover img {
            transform: scale(1.1);
        }

        .coffee-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .price {
            font-size: 1.1rem;
            font-weight: bold;
        }

        .recent-orders table {
            border-radius: 15px;
            overflow: hidden;
        }

        .recent-orders th,
        .recent-orders td {
            padding: 1rem;
        }

        /* Additional Styles for logos */
        .card-logo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .card-body-content {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .card-body-content .card-title {
            margin-right: 15px;
        }

        /* Coffee Specials */
        .coffee-specials .card {
            background-color: #f1f1f1;
            border: 1px dashed #ccc;
            transition: background-color 0.3s ease;
        }

        .coffee-specials .card:hover {
            background-color: #f7e0b1;
        }

        .coffee-specials .card-body {
            text-align: center;
        }

        .feedback-card {
            background-color: #f8f9fa;
            border-left: 4px solid #4caf50;
            padding: 1.5rem;
            margin-top: 2rem;
        }

        /* Additional Styling */
        .container-fluid {
            padding-top: 3rem;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>

    <div class="dashboard-main-wrapper">
        @include('home.header')
        @include('home.sidenav')

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

                <!-- Overview Section -->
                <div class="row mb-4">
                <!-- Total Orders Card -->
<div class="col-md-4">
    <div class="card text-center text-white" style="background-color: #4c3228; color: white;">
        <div class="card-body">
            <h5 class="card-title">
                <i class="fas fa-box"></i> Total Orders
            </h5>
            <p class="card-text">21,375</p>
            <p class="card-text text-warning" style="color: white;">-2.33%</p> <!-- Ensure this text is white -->
            <p class="card-text" style="color: white;">Orders This Month: <strong>5,760</strong></p>
        </div>
    </div>
</div>

<!-- New Customers Card -->
<div class="col-md-4">
    <div class="card text-center text-white" style="background-color: #4c3228; color: white;">
        <div class="card-body">
            <h5 class="card-title">
                <i class="fas fa-users"></i> New Customers
            </h5>
            <p class="card-text">1,012</p>
            <p class="card-text text-success" style="color: white;">+32.40%</p> <!-- Ensure this text is white -->
            <p class="card-text" style="color: white;">Active Customers: <strong>600</strong></p>
        </div>
    </div>
</div>

<!-- Total Sales Card -->
<div class="col-md-4">
    <div class="card text-center text-white" style="background-color: #4c3228; color: white;">
        <div class="card-body">
            <h5 class="card-title">
                <i class="fas fa-dollar-sign"></i> Total Sales
            </h5>
            <p class="card-text">₱24,254</p>
            <p class="card-text text-success" style="color: white;">+25%</p> <!-- Ensure this text is white -->
            <p class="card-text" style="color: white;">Sales This Month: <strong>₱8,540</strong></p>
        </div>
    </div>
</div>


                

                <!-- Sales Analytics Chart -->
                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sales Analytics</h5>
                                <canvas id="sales-analytics-chart" class="sales-analytics"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Trending Coffee Section -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Coffee Supplies for Your Shop</h5>
                                <div class="trending-coffee">
                                    <div class="coffee-item">
                                        <img src="https://www.coffeehit.co.uk/cdn/shop/articles/coffee-beans-101-the-4-most-popular-beans-explained.jpg?v=1708448895&width=1500" alt="Coffee Beans">
                                        <span>Coffee Beans</span>
                                        <span class="price">₱45.00 (250 kg)</span>
                                        <button class="btn btn-primary btn-sm">Order Now</button>
                                    </div>
                                    <div class="coffee-item">
                                        <img src="https://www.frontrangefed.com/wp-content/uploads/2023/10/cold-brew-coffee-3.jpg" alt="Ground Coffee">
                                        <span>Ground Coffee</span>
                                        <span class="price">₱38.00 (300 kg)</span>
                                        <button class="btn btn-primary btn-sm">Order Now</button>
                                    </div>
                                    <div class="coffee-item">
                                        <img src="https://i5.walmartimages.com/asr/889a05f3-c88e-46a0-a920-fca005bbf45c.aa51acc2a1a312ee9ffc8094f7812324.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" alt="Espresso Pods">
                                        <span>Espresso Pods</span>
                                        <span class="price">₱50.00 (200 kg)</span>
                                        <button class="btn btn-primary btn-sm">Order Now</button>
                                    </div>
                                    <div class="coffee-item">
                                        <img src="https://media.twgtea.com/images/default-source/product-images/loose-leaf-teas/4-5-2000x2500/t14_01.tmb-twg_rs450.webp?sfvrsn=a4496484_1" alt="Loose Leaf Tea">
                                        <span>Loose Leaf Tea</span>
                                        <span class="price">₱60.00 (150 kg)</span>
                                        <button class="btn btn-primary btn-sm">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                <!-- Coffee Specials -->
                <div class="row mb-4 coffee-specials">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Limited Edition Brew</h5>
                                <p>Freshly brewed with organic beans!</p>
                                <button class="btn btn-warning">Get it Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Caramel Frappe</h5>
                                <p>Sweet and delightful!</p>
                                <button class="btn btn-warning">Order Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special Mocha Latte</h5>
                                <p>Perfect blend of coffee and chocolate!</p>
                                <button class="btn btn-warning">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Customer Feedback -->
                <div class="feedback-card">
                    <h5 class="section-title">Customer Feedback</h5>
                    <p><strong>John Doe</strong> - "Amazing service and great coffee quality!"</p>
                    <p><strong>Jane Smith</strong> - "I loved the new Mocha flavor, will definitely order again!"</p>
                </div>

                <!-- Recent Orders Section -->
                <div class="recent-orders">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Orders</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Items</th>
                                        <th>Date & Time</th>
                                        <th>Table Number</th>
                                        <th>Price</th>
                                        <th>Payment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Cappuccino #254215</td>
                                        <td>27 Oct 2023, 01:05 PM</td>
                                        <td>2B</td>
                                        <td>$200</td>
                                        <td>Cash</td>
                                        <td><button class="btn btn-primary btn-sm">Details</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @include('home.footer')
    </div>

    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sales Analytics Line Chart
            const salesAnalyticsCtx = document.getElementById('sales-analytics-chart').getContext('2d');
            new Chart(salesAnalyticsCtx, {
                type: 'line',
                data: {
                    labels: ['09:00 AM', '12:00 PM', '04:00 PM', '08:00 PM', '12:00 AM'],
                    datasets: [{
                        label: 'Sales Analytics',
                        data: [100, 150, 230, 180, 120],
                        borderColor: '#FF5733',
                        backgroundColor: 'rgba(255, 87, 51, 0.2)',
                        tension: 0.4,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { display: false } }
                }
            });
        });
    </script>
</body>

</html>