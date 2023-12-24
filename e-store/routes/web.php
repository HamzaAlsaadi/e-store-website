<?php
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'dashboard', 'middleware' => [ 'AdminMiddleware']], function ()
{
    Route::get('', [AdminController::class, 'index']);
    Route::get('/add-company',[AdminController::class, 'addcompany'])->name('add.comany');
    Route::post('/store-company',[AdminController::class, 'storecompany'])->name('store.comany');
    Route::get('/add-category',[AdminController::class, 'addcategory'])->name('add.category');
    Route::post('/store-category',[AdminController::class, 'storecategory'])->name('store.category');
    Route::get('/add-phone',[AdminController::class, 'addphone'])->name('add.phone');
    Route::post('/store-phone',[AdminController::class, 'storephone'])->name('store.phone');
    Route::get('/add-csv',[AdminController::class, 'addcsv'])->name('add.csv');
    Route::post('/store-csv',[AdminController::class, 'storecsv'])->name('store.csv');
    Route::get('/admin-main',[AdminController::class, 'main'])->name('admin.main');
    Route::delete('/company-destroy/{id}',[AdminController::class, 'companydistroy'])->name('company.destroy');
    Route::delete('/category-destroy/{id}',[AdminController::class, 'categorydistroy'])->name('category.destroy');
    Route::delete('/prduct-destroy/{id}',[AdminController::class, 'productdistroy'])->name('products.destroy');
    Route::get('/company-update/{id}',[AdminController::class, 'companyupdate'])->name('company.update');
    Route::get('/category-update/{id}}',[AdminController::class, 'categoryupdate'])->name('category.update');
    Route::get('/products-update/{id}',[AdminController::class, 'productupdate'])->name('product.update');
    Route::PUT('/update-category/{id}',[AdminController::class, 'updatecate'])->name('update.category');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
