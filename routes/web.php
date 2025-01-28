<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InventoryLogController;

Route::get('/',[UserController::class, 'index'])->name('login');

Route::get('/dashboard',[UserController::class, 'dashboard'])->name('dashboard');

Route::get('/profile',[SettingsController::class, 'profile'])->name('profile');

Route::get('/settings',[SettingsController::class, 'settings'])->name('settings');

// Products
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);

// Suppliers
Route::resource('suppliers', SupplierController::class);

// Customers
Route::resource('customers', CustomerController::class);

// Sales
Route::resource('sales', SaleController::class);

// Purchases
Route::resource('purchases', PurchaseController::class);

// Inventory Logs
Route::resource('inventory-logs', InventoryLogController::class);

// Reports
Route::get('reports/sales', [ReportController::class, 'salesReport'])->name('reports.sales');
Route::get('reports/purchases', [ReportController::class, 'purchaseReport'])->name('reports.purchases');
Route::get('reports/inventory', [ReportController::class, 'inventoryReport'])->name('reports.inventory');
