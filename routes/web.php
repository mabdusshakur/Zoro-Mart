<?php
use App\Http\Livewire\User\CartComponent;
use App\Http\Livewire\User\CheckoutComponent;
use App\Http\Livewire\User\HomeComponent;
use App\Http\Livewire\User\ProductDetailsComponent;
use App\Http\Livewire\User\ProductsComponent;
use App\Http\Livewire\User\WishListComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class);
Route::get('/products', ProductsComponent::class);
Route::get('/product-details', ProductDetailsComponent::class);
Route::get('/wishlist', WishListComponent::class);
Route::get('/cart', CartComponent::class);
Route::get('/checkout', CheckoutComponent::class);