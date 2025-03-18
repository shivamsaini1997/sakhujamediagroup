<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CareersController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\DigitalAssetsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductionController;
use App\Http\Controllers\Frontend\CatalogueController;
use App\Http\Controllers\Frontend\joinUsController;

use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache-all', function () {
    // Clear route cache
    Artisan::call('route:clear');
    
    // Clear config cache
    Artisan::call('config:clear');
    
    // Clear application cache
    Artisan::call('cache:clear');
    
    // Optional: Clear view cache if needed
    Artisan::call('view:clear');

    return "All caches cleared!";
});
// --------Admin Routes Start---------
Route::middleware('authadminlogin')->group(function(){
    Route::get('/admin', [AdminController::class, 'login'])->name('admin');
    Route::post('/admin', [AdminController::class, 'loginAdmin'])->name('admin-login');
    Route::get('/admin/forget-password', [AdminController::class, 'forgetPassword'])->name('forgetpassword');
    Route::post('/admin/forget-password', [AdminController::class, 'forgetPasswordSubmit'])->name('forgetpasswordsubmit');
    Route::get('/admin/reset-password/{token}', [AdminController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('/admin/reset-password', [AdminController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});

Route::middleware('auth')->group(function(){
    // Route::get('/admin/register', [AdminController::class, 'registerUser'])->name('userRegister');
    // Route::post('/admin/register', [AdminController::class, 'stoteRegisterUser'])->name('store-register');
    Route::get('/admin/register/{id}', [AdminController::class, 'deleteRegister'])->name('delete-register');
    Route::get('/admin/logout',[AdminController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::match(['GET','POST'], '/admin/home-page', [AdminController::class, 'homePage'])->name('homepage');

    Route::match(['GET','POST'], '/admin/global', [AdminController::class, 'global'])->name('global');
    Route::get('/admin/global/delete-header-logo/{id}', [AdminController::class, 'deleteHeaderLogo'])->name('delete-header-logo');
    Route::get('/admin/global/delete-favicon/{id}', [AdminController::class, 'deleteFavicon'])->name('delete-favicon');
    Route::get('/admin/global/delete-footer-logo/{id}', [AdminController::class, 'deleteFooterLogo'])->name('delete-footer-logo');

    // digital assets youtube
    Route::get('/admin/add-digital-assets-youtube', [AdminController::class, 'addAssetsYoutube'])->name('add-assets-youtube');
    Route::post('/admin/add-digital-assets-youtube', [AdminController::class, 'storeAssetsYoutube'])->name('store-assets-youtube');
    Route::get('/admin/manage-digital-assets-youtube', [AdminController::class, 'manageDigitalAssetsYoutube'])->name('manage-digital-assets-youtube');
    Route::get('/admin/manage-digital-assets-youtube/edit/{id}', [AdminController::class, 'editYoutubeDigital'])->name('edit-youtube-digital-assets');
    Route::post('/admin/manage-digital-assets-youtube/update/{id}', [AdminController::class, 'updateYoutubeDigital'])->name('update-youtube-digital');
    Route::get('admin/manage-digital-assets-youtube/delete/{id}', [AdminController::class, 'deleteYoutubeDigital'])->name('delete-youtube-assets');
    Route::get('/admin/manage-digital-assets-youtube/{id}/{status}',[AdminController::class, 'statusYoutubeDigital'])->name('status-youtube-assets');

    //digital assets facebook
    Route::get('/admin/add-digital-assets-facebook', [AdminController::class, 'addAssetsFacebook'])->name('add-assets-facebook');
    Route::post('/admin/add-digital-assets-facebook', [AdminController::class, 'storeAssetsFacebook'])->name('store-assets-facebook');
    Route::get('/admin/manage-digital-assets-facebook', [AdminController::class, 'manageAssetsFacebook'])->name('manage-digital-assets-facebook');
    Route::get('/admin/manage-digital-assets-edit/{id}',[AdminController::class, 'editAssetsFacebook'])->name('edit-facebook-assets');
    Route::post('/admin/manage-digital-assets-facebook/update/{id}', [AdminController::class, 'updateFacebookDigital'])->name('update-facebook-digital');
    Route::get('admin/manage-digital-assets-facebook/delete/{id}', [AdminController::class, 'deleteFackbookDigital'])->name('delete-facebook-assets');
    Route::get('/admin/manage-digital-assets-facebook/{id}/{status}',[AdminController::class, 'statusFacebookDigital'])->name('status-facebook-assets');

    Route::match(['GET','POST'], '/admin/employee-of-the-month', [AdminController::class, 'employeeOfTheMonth'])->name('employee-of-the-month');
    Route::match(['GET','POST'], '/admin/performer-of-the-month', [AdminController::class, 'performerOfTheMonth'])->name('performer-of-the-month');

    Route::get('/admin/add-innovative-productions', [AdminController::class, 'addInnovativeProductions'])->name('add-Innovative-productions');
    Route::post('/admin/add-innovative-productions', [AdminController::class, 'storeInnovativeProductions'])->name('store-Innovative-productions');
    Route::get('/admin/manage-innovative-productions', [AdminController::class, 'manageInnovativeProductions'])->name('manage-Innovative-productions');
    Route::get('/admin/manage-innovative-productions/edit/{id}',[AdminController::class, 'editInnovativeProductions'])->name('edit-Innovative-productions');
    Route::post('/admin/manage-innovative-productions/update/{id}', [AdminController::class, 'updateInnovativeProductions'])->name('update-Innovative-productions');
    Route::get('admin/manage-innovative-productions/delete/{id}', [AdminController::class, 'deleteInnovativeProductions'])->name('delete-Innovative-productions');
    Route::get('/admin/manage-innovative-productions/status/{id}/{status}', [AdminController::class, 'statusInnovativeProductions'])->name('status-innovative-productions');

    Route::get('/admin/add-productions-studio', [AdminController::class, 'addProductionsStudio'])->name('add-productions-studio');
    Route::post('/admin/add-productions-studio', [AdminController::class, 'storeProductionsStudio'])->name('store-productions-studio');
    Route::get('/admin/manage-productions-studio', [AdminController::class, 'manageProductionsStudio'])->name('manage-productions-studio');
    Route::get('/admin/manage-productions-studio/edit/{id}',[AdminController::class, 'editProductionsStudio'])->name('edit-productions-studio');
    Route::post('/admin/manage-productions-studio/update/{id}', [AdminController::class, 'updateProductionsStudio'])->name('update-productions-studio');
    Route::get('admin/manage-productions-studio/delete/{id}', [AdminController::class, 'deleteProductionsStudio'])->name('delete-productions-studio');
    Route::get('/admin/manage-productions-studio/status/{id}/{status}', [AdminController::class, 'statusproductionsStudio'])->name('status-productions-studio');

    Route::get('/admin/add-catalogue', [AdminController::class, 'addCatalogue'])->name('add-catalogue');
    Route::post('/admin/add-catalogue', [AdminController::class, 'storeCatalogue'])->name('store-catalogue');
    Route::get('/admin/manage-catalogue', [AdminController::class, 'manageCatalogue'])->name('manage-catalogue');
    Route::get('/admin/manage-catalogue/edit/{id}',[AdminController::class, 'editCatalogue'])->name('edit-catalogue');
    Route::post('/admin/manage-catalogue/update/{id}', [AdminController::class, 'updateCatalogue'])->name('update-catalogue');
    Route::get('admin/manage-catalogue/delete/{id}', [AdminController::class, 'deleteCatalogue'])->name('delete-catalogue');
    Route::get('/admin/manage-catalogue/status/{id}/{status}', [AdminController::class, 'statusCatalogue'])->name('status-catalogue');

    Route::get('/admin/add-team', [AdminController::class, 'addTeam'])->name('add-team');
    Route::post('/admin/add-team', [AdminController::class, 'storeTeam'])->name('store-team');
    Route::get('/admin/manage-team', [AdminController::class, 'manageTeam'])->name('manage-team');
    Route::get('/admin/manage-team/edit/{id}',[AdminController::class, 'editteam'])->name('edit-team');
    Route::post('/admin/manage-team/update/{id}', [AdminController::class, 'updateteam'])->name('update-team');
    Route::get('admin/manage-team/delete/{id}', [AdminController::class, 'deleteTeam'])->name('delete-team');
    Route::get('/admin/manage-team/status/{id}/{status}', [AdminController::class, 'statusTeam'])->name('status-team');

    Route::get('/admin/add-job',[AdminController::class, 'addJob'])->name('add-job');
    Route::post('/admin/add-job', [AdminController::class, 'storeJob'])->name('store-job');
    Route::get('/admin/manage-job',[AdminController::class, 'manageJob'])->name('manage-job');
    Route::get('/admin/job-data',[AdminController::class, 'jobData'])->name('job-data');
    Route::get('/admin/manage-job/edit/{id}',[AdminController::class, 'editJob'])->name('edit-job');
    Route::post('/admin/manage-job/update/{id}', [AdminController::class, 'updateJob'])->name('update-job');
    Route::get('admin/manage-job/delete/{id}', [AdminController::class, 'deleteJob'])->name('delete-job');
    Route::get('/admin/manage-job/status/{id}/{status}', [AdminController::class, 'statusJob'])->name('status-job');
    Route::get('/admin/manage-job/open-close/{id}/{opening}', [AdminController::class, 'opencloseJob'])->name('opening-job');


    Route::get('/admin/add-blog-category',[AdminController::class, 'addBlogCategory'])->name('add-blog-category');
    Route::post('/admin/add-blog-category',[AdminController::class, 'storeBlogCategory'])->name('store-blog-category');
    Route::get('/admin/add-blog-category/delete/{id}', [AdminController::class,'deleteCategory'])->name('delete-category');

    Route::get('/admin/connect-here',[AdminController::class, 'ConnectHere'])->name('connect-here');

    Route::get('/admin/add-blog',[AdminController::class, 'addBlog'])->name('add-blog');
    Route::post('/admin/add-blog', [AdminController::class, 'storeBlog'])->name('store-blog');
    Route::get('/admin/manage-blog',[AdminController::class, 'manageBlog'])->name('manage-blog');
    Route::get('/admin/manage-blog/edit/{id}', [AdminController::class, 'editBlog'])->name('edit-blog');
    Route::post('/admin/manage-blog/update/{id}', [AdminController::class, 'updateBlog'])->name('update-blog');
    Route::get('/admin/manage-blog/status/{id}/{status}', [AdminController::class, 'statusBlog'])->name('status-blog');
    Route::get('/admin/manage-blog/delete/{id}', [AdminController::class, 'deleteBlog'])->name('delete-blog');
});
Route::middleware(['auth', 'checkUserType:2'])->group(function() {
    Route::get('/admin/register', [AdminController::class, 'registerUser'])->name('userRegister');
    Route::post('/admin/register', [AdminController::class, 'stoteRegisterUser'])->name('store-register');
});
// --------Admin Routes end---------

// ------------Frontend Routes Start--------
Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/about',[AboutusController::class, 'aboutUs'])->name('about-us');
Route::get('/digital-assets',[DigitalAssetsController::class, 'digitalAssets'])->name('digital-assets');
Route::get('/careers',[CareersController::class, 'careers'])->name('careers');
Route::get('/production',[ProductionController::class, 'production'])->name('production');
Route::get('/catalogue',[CatalogueController::class, 'catalogue'])->name('catalogue');
Route::get('/join-us',[joinUsController::class, 'joinUs'])->name('join-us');
Route::get('/join-us/{slug}',[joinUsController::class, 'joinUsDetails'])->name('join-us-details');
Route::post('join-us/{slug}', [joinUsController::class, 'storeJobData'])->name('store-job-data');
Route::get('/blog',[BlogController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}',[BlogController::class, 'blogDetail'])->name('blog-detail');
Route::get('/contact',[ContactusController::class, 'conatctUs'])->name('contact-us');
Route::post('/contact',[ContactusController::class, 'contactForm'])->name('contact-us-fm');
