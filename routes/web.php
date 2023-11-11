<?php
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
    Route::get('/admin-panel/dashboard', \App\Http\Livewire\Admin\DashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin-panel/dashboard/products', \App\Http\Livewire\Admin\ProductsComponent::class)->name('admin.products');
    Route::get('/admin-panel/dashboard/add-product', \App\Http\Livewire\Admin\AddProductComponent::class)->name('admin.add-product');
    Route::get('/admin-panel/dashboard/categories', \App\Http\Livewire\Admin\CategoriesComponent::class)->name('admin.categories');
    Route::get('/admin-panel/dashboard/add-category', \App\Http\Livewire\Admin\AddCategoryComponent::class)->name('admin.add-category');
    Route::get('/admin-panel/dashboard/sub-categories', \App\Http\Livewire\Admin\SubCategoriesComponent::class)->name('admin.sub-categories');
    Route::get('/admin-panel/dashboard/add-sub-category', \App\Http\Livewire\Admin\AddSubCategoryComponent::class)->name('admin.add-sub-category');

    Route::get('/admin-panel/dashboard/edit-category/{id}', \App\Http\Livewire\Admin\EditCategoryComponent::class)->name('admin.edit-category');
    Route::get('/admin-panel/dashboard/edit-sub-category/{id}', \App\Http\Livewire\Admin\EditSubCategoryComponent::class)->name('admin.edit-sub-category');
});