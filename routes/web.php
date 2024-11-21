<?php

use App\Http\Controllers\Welcomecontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/register', [Welcomecontroller::class, 'register'])->name(name: 'register');
Route::get('/', [Welcomecontroller::class, 'dashboard'])->name('dashboard');
Route::get('/logins', [Welcomecontroller::class, 'logins'])->name('logins');
Route::get('/signup', [Welcomecontroller::class, 'signup'])->name(name: 'signup');
Route::get('/forgot-passwords', [Welcomecontroller::class, 'forgotpasswords'])->name(name: 'forgot-passwords');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); 

Route::get("/", function () {
    return view("home.admin.dashboard"); 
})->name('/');
Route::get("OrderList", function () {
    return view("Orders.OrderList"); 
})->name('OrderList');
Route::get("OrderDetails", function () {
    return view("Orders.OrderDetails"); 
})->name('OrderDetails');
Route::get("ManageReturns", function () {
    return view("Orders.ManageReturns"); 
})->name('ManageReturns');
Route::get("ProductList", function () {
    return view("Products.ProductList"); 
})->name('ProductList');
Route::get("AddNewProducts", function () {
    return view("Products.AddNewProducts"); 
})->name('AddNewProducts');
Route::get("CategoryManagement", function () {
    return view("Products.CategoryManagement"); 
})->name('CategoryManagement');
Route::get("StocksOverview", function () {
    return view("InventoryManagement.StocksOverview"); 
})->name('StocksOverview');
Route::get("ManageSuppliers", function () {
    return view("InventoryManagement.ManageSuppliers"); 
})->name('ManageSuppliers');
Route::get("LowStockAlerts", function () {
    return view("InventoryManagement.LowStockAlerts"); 
})->name('LowStockAlerts');
Route::get("TransactionHistory", function () {
    return view("PaymentProcessing.TransactionHistory"); 
})->name('TransactionHistory');
Route::get("Refunds", function () {
    return view("PaymentProcessing.Refunds"); 
})->name('Refunds');
Route::get("PaymentSettings", function () {
    return view("PaymentProcessing.PaymentSettings"); 
})->name('PaymentSettings');
Route::get("SalesReport", function () {
    return view("ReportAnalytics.SalesReport"); 
})->name('SalesReport');
Route::get("InventoryReports", function () {
    return view("ReportAnalytics.InventoryReports"); 
})->name('InventoryReports');