<?php


use App\Http\Controllers\ImageController;
use App\Http\Controllers\Admin\AdminCategoriesController;
use App\Http\Controllers\Admin\AdminColorsController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\AdminSizesController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\MyAccountController;
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

Route::get('refresh/captcha', function(){
    return response()->json(['captcha'=> captcha_img('flat')]);
})->name('api.refresh.captcha');

Route::get('/', FrontendController::class)->name('frontend.home');
// Route::get('/about-us', [FrontendController::class, "about_us"])->name('frontend.about_us');
// Route::get('/contact-us', [FrontendController::class, "contact_us"])->name('frontend.contact_us');

// Route::get('/shop', [FrontendController::class, "shop"])->name('frontend.shop');


// Route::get('/shop-categories', [FrontendController::class, "shop"])->name('frontend.shop.categories');

// Route::get('/cart', [FrontendController::class, "cart"])->name('frontend.cart');
// Route::get('/product/{category}/{product}', [FrontendController::class, "product_detail"])->name('frontend.product.detail');

// Utilities
Route::get('/getLocalImage', ImageController::class)->name('images');




Route::middleware(['auth'])->group(function () {
    Route::get('/my-account/profile', MyAccountController::class)->name('frontend.my-account.profile');
    Route::get('/my-account/orders', [MyAccountController::class, "orders"])->name('frontend.my-account.orders');
    Route::get('/my-account/favorite', [MyAccountController::class, "favorite"])->name('frontend.my-account.favorite');
//         admin.dashboard
    
});




Route::middleware(['auth', 'role:super'])->prefix('admin')->name('admin.')->group(function () {
    
    //DASHBOARD ADMIN
    Route::get('/dashboard', AdminDashboardController::class)->name('dashboard');
            
    //     begin::::ROUTE CATEGORIES
    Route::get('/categories', AdminCategoriesController::class)->name('categories');
    Route::get('categories/create', [AdminCategoriesController::class, 'create'])->name('categories.create');
    Route::post('categories/store', [AdminCategoriesController::class, 'store'])->name('categories.store');
    Route::get('{category}/categories', [AdminCategoriesController::class, 'edit'])->name('categories.edit');
    Route::post('categories/{category}/update', [AdminCategoriesController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}/destroy', [AdminCategoriesController::class, 'destroy'])->name('categories.destroy');
    //     end::::ROUTE CATEGORIES
    
    //     begin::::ROUTE USERS
    Route::get('/users', AdminUsersController::class)->name('users');
    Route::get('users/create', [AdminUsersController::class, 'create'])->name('users.create');
    Route::post('users/store', [AdminUsersController::class, 'store'])->name('users.store');
    Route::get('{user}/users', [AdminUsersController::class, 'edit'])->name('users.edit');
    Route::post('users/{user}/update', [AdminUsersController::class, 'update'])->name('users.update');
    Route::delete('users/{user}/destroy', [AdminUsersController::class, 'destroy'])->name('users.destroy');
    //     end::::ROUTE USERS
    
    //     begin::::ROUTE COLORS
    Route::get('/colors', AdminColorsController::class)->name('colors');
    Route::get('colors/create', [AdminColorsController::class, 'create'])->name('colors.create');
    Route::post('colors/store', [AdminColorsController::class, 'store'])->name('colors.store');
    Route::get('{color}/colors', [AdminColorsController::class, 'edit'])->name('colors.edit');
    Route::post('colors/{color}/update', [AdminColorsController::class, 'update'])->name('colors.update');
    Route::delete('colors/{color}/destroy', [AdminColorsController::class, 'destroy'])->name('colors.destroy');
    //     end::::ROUTE COLORS
    
    //     begin::::ROUTE SIZES
    Route::get('/sizes', AdminSizesController::class)->name('sizes');
    Route::get('sizes/create', [AdminSizesController::class, 'create'])->name('sizes.create');
    Route::post('sizes/store', [AdminSizesController::class, 'store'])->name('sizes.store');
    Route::get('{size}/sizes', [AdminSizesController::class, 'edit'])->name('sizes.edit');
    Route::post('sizes/{size}/update', [AdminSizesController::class, 'update'])->name('sizes.update');
    Route::delete('sizes/{size}/destroy', [AdminSizesController::class, 'destroy'])->name('sizes.destroy');
    //     end::::ROUTE SIZES
    
    //     begin::::ROUTE PAGES
    Route::get('/pages', AdminPagesController::class)->name('pages');
    Route::get('pages/create', [AdminPagesController::class, 'create'])->name('pages.create');
    Route::post('pages/store', [AdminPagesController::class, 'store'])->name('pages.store');
    Route::get('{page}/pages', [AdminPagesController::class, 'edit'])->name('pages.edit');
    Route::post('pages/{page}/update', [AdminPagesController::class, 'update'])->name('pages.update');
    Route::delete('pages/{page}/destroy', [AdminPagesController::class, 'destroy'])->name('pages.destroy');
    //     end::::ROUTE PAGES
    
    //     begin::::ROUTE PRODUCTS
    Route::get('/products', AdminProductsController::class)->name('products');
    Route::get('products/create', [AdminProductsController::class, 'create'])->name('products.create');
    Route::post('products/store', [AdminProductsController::class, 'store'])->name('products.store');
    Route::get('{product}/products', [AdminProductsController::class, 'edit'])->name('products.edit');
    Route::post('products/{product}/update', [AdminProductsController::class, 'update'])->name('products.update');
    Route::delete('products/{product}/destroy', [AdminProductsController::class, 'destroy'])->name('products.destroy');
    //     end::::ROUTE PRODUCTS
});
