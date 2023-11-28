<?php
use App\Http\Livewire\User\AboutComponent;
use App\Http\Livewire\User\CartComponent;
use App\Http\Livewire\User\CheckoutCancelComponent;
use App\Http\Livewire\User\CheckoutComponent;
use App\Http\Livewire\User\CheckoutSuccessComponent;
use App\Http\Livewire\User\ContactComponent;
use App\Http\Livewire\User\HomeComponent;
use App\Http\Livewire\User\LoginComponent;
use App\Http\Livewire\User\ProductDetailsComponent;
use App\Http\Livewire\User\ProductsComponent;
use App\Http\Livewire\User\RegistrationComponent;
use App\Http\Livewire\User\WishListComponent;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {
    Route::get('/products/{id?}/{slug?}/{sub_category_id?}', ProductsComponent::class)->name('user.products');
    Route::get('/product-details/{id}/{slug?}/{category_id?}/{sub_category_id?}/', ProductDetailsComponent::class)->name('user.product-details');
    Route::get('/wishlist', WishListComponent::class)->name('user.wishlist');
    Route::get('/cart', CartComponent::class)->name('user.cart');
    Route::get('/checkout', CheckoutComponent::class)->name('user.checkout');
    Route::get('/checkout-success', CheckoutSuccessComponent::class)->name('user.checkout.success');
    Route::get('/checkout-cancel', CheckoutCancelComponent::class)->name('user.checkout.cancel');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('user.login');
    })->name('user.logout');
});

Route::post('/checkout/stripe-webhook', [CheckoutComponent::class, 'stripe_webhook'])->name('user.checkout.stripe_webhook');
Route::get('/', HomeComponent::class)->name('user.home');
Route::get('/login', LoginComponent::class)->name('user.login');
Route::get('/register', RegistrationComponent::class)->name('user.register');

Route::get('/about-us', AboutComponent::class)->name('user.about');
Route::get('/contact-us', ContactComponent::class)->name('user.contact');

Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/admin-panel/dashboard', \App\Http\Livewire\Admin\DashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin-panel/dashboard/products', \App\Http\Livewire\Admin\ProductsComponent::class)->name('admin.products');
    Route::get('/admin-panel/dashboard/categories', \App\Http\Livewire\Admin\CategoriesComponent::class)->name('admin.categories');
    Route::get('/admin-panel/dashboard/sub-categories', \App\Http\Livewire\Admin\SubCategoriesComponent::class)->name('admin.sub-categories');

    Route::get('/admin-panel/dashboard/add-product', \App\Http\Livewire\Admin\AddProductComponent::class)->name('admin.add-product');
    Route::get('/admin-panel/dashboard/add-category', \App\Http\Livewire\Admin\AddCategoryComponent::class)->name('admin.add-category');
    Route::get('/admin-panel/dashboard/add-sub-category', \App\Http\Livewire\Admin\AddSubCategoryComponent::class)->name('admin.add-sub-category');

    Route::get('/admin-panel/dashboard/edit-product/{id}', \App\Http\Livewire\Admin\EditProductComponent::class)->name('admin.edit-product');
    Route::get('/admin-panel/dashboard/edit-category/{id}', \App\Http\Livewire\Admin\EditCategoryComponent::class)->name('admin.edit-category');
    Route::get('/admin-panel/dashboard/edit-sub-category/{id}', \App\Http\Livewire\Admin\EditSubCategoryComponent::class)->name('admin.edit-sub-category');

    Route::get('/admin-panel/dashboard/utility', \App\Http\Livewire\Admin\UtilityComponent::class)->name('admin.utility');
    Route::get('/admin-panel/dashboard/social-media', \App\Http\Livewire\Admin\SocialMediaComponent::class)->name('admin.socialmedia');
});