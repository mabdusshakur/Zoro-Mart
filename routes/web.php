<?php
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\User\CartComponent;
use App\Http\Livewire\User\CheckoutComponent;
use App\Http\Livewire\User\HomeComponent;
use App\Http\Livewire\User\LoginComponent;
use App\Http\Livewire\User\ProductDetailsComponent;
use App\Http\Livewire\User\ProductsComponent;
use App\Http\Livewire\User\RegistrationComponent;
use App\Http\Livewire\User\WishListComponent;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', HomeComponent::class)->name('home');
});

Route::get('/products', ProductsComponent::class)->name('products');
Route::get('/product-details', ProductDetailsComponent::class);
Route::get('/wishlist', WishListComponent::class);
Route::get('/cart', CartComponent::class);
Route::get('/checkout', CheckoutComponent::class);

Route::get('/login', LoginComponent::class)->name('login');
Route::get('/register', RegistrationComponent::class)->name('register');
// Route::get('/logout', CheckoutComponent::class);



Route::prefix('admin-panel')->group(function () {
    Route::get('/dashboard', DashboardComponent::class);
});