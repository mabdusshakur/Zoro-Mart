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
    
    Route::get('/logout', function(){
        Auth::logout();
    })->name('user.logout');
    
    Route::get('/products', ProductsComponent::class)->name('user.products');
    Route::get('/product-details', ProductDetailsComponent::class)->name('user.product-details');
    Route::get('/wishlist', WishListComponent::class)->name('user.wishlist');
    Route::get('/cart', CartComponent::class)->name('user.cart');
    Route::get('/checkout', CheckoutComponent::class)->name('user.checkout');
});


Route::get('/', HomeComponent::class)->name('user.home');
Route::get('/login', LoginComponent::class)->name('user.login');
Route::get('/register', RegistrationComponent::class)->name('user.register');
// Route::get('/logout', CheckoutComponent::class);



Route::group(['middleware' => ['auth','isAdmin']],function () {
    Route::get('/admin-panel/dashboard', DashboardComponent::class);
});