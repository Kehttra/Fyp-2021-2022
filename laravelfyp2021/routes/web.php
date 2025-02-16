<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\AboutusComponent;
use App\Http\Livewire\ContactusComponent;
use App\Http\Livewire\PhonebrandsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\DetailsComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);


Route::get('/shop',ShopComponent::class);

Route::get('/Aboutus',AboutusComponent::class);

Route::get('/Contactus',ContactusComponent::class);

Route::get('/Phonebrands',PhonebrandsComponent::class);

Route::get('/Cart',CartComponent::class)->name('product.cart');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}',CategoryComponent::class)->name('product.categories');

Route::get('/search',SearchComponent::class)->name('product.search');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//For User or Costumer 
Route::middleware(['auth:sanctum','verified'])->group(function(){
        Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//For Admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
        Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
        Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
});




