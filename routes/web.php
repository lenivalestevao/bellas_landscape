<?php


use App\Http\Controllers\ImageController;
use App\Http\Controllers\Admin\AdminCategoriesController;
use App\Http\Controllers\Admin\AdminColorsController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\AdminPortfolioController;
use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\AdminServicesController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminSizesController;
use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\MyAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminTeamsController;

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

Route::get('/about-us', [FrontendController::class, "about_us"])->name('frontend.about_us');

Route::get('/privacy-policy', [FrontendController::class, "privacy_policy"])->name('frontend.privacy_policy');

Route::get('/terms-of-service', [FrontendController::class, "terms_of_service"])->name('frontend.terms_of_service');

Route::get('/contact-us', [FrontendController::class, "contact_us"])->name('frontend.contact_us');
Route::get('/portfolio', [FrontendController::class, "portfolio"])->name('frontend.portfolio');
Route::get('/our-services', [FrontendController::class, "our_services"])->name('frontend.our_services');

Route::get('/services/{slug}', [FrontendController::class, 'show_service'])->name('frontend.service.show');

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
            
    Route::get('/website-settings', AdminSettingController::class)->name('settings');
    
    
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
    
    
    //     begin::::ROUTE SERVICES
    Route::get('/services', AdminServicesController::class)->name('services');
    Route::get('services/create', [AdminServicesController::class, 'create'])->name('services.create');
    Route::post('services/store', [AdminServicesController::class, 'store'])->name('services.store');
    Route::get('{service}/service', [AdminServicesController::class, 'edit'])->name('services.edit');
    Route::post('services/{service}/update', [AdminServicesController::class, 'update'])->name('services.update');
    Route::delete('services/{service}/destroy', [AdminServicesController::class, 'destroy'])->name('services.destroy');
    //     end::::ROUTE SERVICES
    
    
    //     begin::::ROUTE TEAM
    Route::get('/team', AdminTeamsController::class)->name('teams');
    Route::get('person/create', [AdminTeamsController::class, 'create'])->name('teams.create');
    Route::post('person/store', [AdminTeamsController::class, 'store'])->name('teams.store');
    Route::get('{team}/person', [AdminTeamsController::class, 'edit'])->name('teams.edit');
    Route::post('person/{team}/update', [AdminTeamsController::class, 'update'])->name('teams.update');
    Route::delete('person/{team}/destroy', [AdminTeamsController::class, 'destroy'])->name('teams.destroy');
    //     end::::ROUTE TEAM
    
    //     begin::::ROUTE TEAM
    Route::get('/portfolio', AdminPortfolioController::class)->name('portfolio');
    Route::get('portfolio/create', [AdminPortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('portfolio/store', [AdminPortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('{portfolio}/portfolio', [AdminPortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::post('portfolio/{portfolio}/update', [AdminPortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('portfolio/{portfolio}/destroy', [AdminPortfolioController::class, 'destroy'])->name('portfolio.destroy');
    //     end::::ROUTE TEAM
    
    
    
});
