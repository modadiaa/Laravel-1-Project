<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UnderSliderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\productnameController;


use App\Http\Controllers\HomeController;
//use App\Http\Controllers\MessageController;


// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//     ], function(){

//  Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// });



Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about',[App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/category',[App\Http\Controllers\HomeController::class, 'category'])->name('category');
Route::get('/subcategory/{id}/{slug}',[App\Http\Controllers\HomeController::class,'subcategory'])->name('subcategory');

Route::get('/news',[App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/newsdesc/{id}/{slug}',[App\Http\Controllers\HomeController::class, 'newsdesc'])->name('newsdesc');


Route::get('/contact',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/product/{id}',[App\Http\Controllers\HomeController::class,'product'])->name('product');

Route::get('/categoryproducts/{id}/{slug}',[App\Http\Controllers\HomeController::class,'categoryproducts'])->name('categoryproducts');

Route::post('/',[App\Http\Controllers\MessageController::class,'store'])->name('store');

Route::get('/productname',[App\Http\Controllers\HomeController::class, 'productname'])->name('productname');


// Route::get('/categories/{category}', [WebsiteCategoryController::class, 'show'])->name('category');
// Route::get('/post/{post}', [PostController::class, 'show'])->name('post');





Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'checkLogin']], function () {
    Route::get('/', function () {return view('dashboard.dashboard');})->name('dashboard');

    // ******************** ADMIN CATEGORY  *************************
      Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
        Route::delete('/alldelete','deleteAll')->name('deleteall');
        // Route::get('/filter_category', 'filter_category')->name('filter_category');

   });

        // ******************** ADMIN PRODUCTS   *************************
        Route::prefix('/product')->name('product.')->controller(ProductController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/show/{id}','show')->name('show');
            Route::delete('/alldelete','deleteAll')->name('deleteall');
     });


       // ******************** ADMIN USER  *************************
       Route::prefix('/user')->name('user.')->controller(UserController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
        Route::delete('/alldelete','deleteAll')->name('deleteall');

       });

       // ******************** ADMIN SLIDER  *************************
        Route::prefix('/slider')->name('slider.')->controller(SliderController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
        Route::delete('/alldelete','deleteAll')->name('deleteall');

        });


        // ******************** ADMIN UDERSLIDER  *************************
        Route::prefix('/underslider')->name('underslider.')->controller(UnderSliderController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
        Route::delete('/alldelete','deleteAll')->name('deleteall');

        });

        // ******************** ADMIN ABOUT  *************************
        Route::prefix('/about')->name('about.')->controller(AboutController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
        Route::delete('/alldelete','deleteAll')->name('deleteall');

        });

        // ******************** ADMIN GALLERY  *************************
        Route::prefix('/gallery')->name('gallery.')->controller(GalleryController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/show/{id}','show')->name('show');
            Route::delete('/alldelete','deleteAll')->name('deleteall');

        });



        // ******************** ADMIN CONTACT  *************************
        Route::prefix('/contact')->name('contact.')->controller(ContactController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/show/{id}','show')->name('show');
            Route::delete('/alldelete','deleteAll')->name('deleteall');

        });


        // ******************** ADMIN NEWS  *************************
        Route::prefix('/news')->name('news.')->controller(NewsController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/show/{id}','show')->name('show');
            Route::delete('/alldelete','deleteAll')->name('deleteall');

        });

        // ******************** ADMIN SETTING  *************************
        Route::prefix('/setting')->name('setting.')->controller(SettingController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{setting}','update')->name('update');
            // Route::post('/settings/update/{setting}', [SettingController::class, 'update'])->name('settings.update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/show/{id}','show')->name('show');
            Route::delete('/alldelete','deleteAll')->name('deleteall');

        });


        // ******************** ADMIN PRODUCTNAME  *************************
        Route::prefix('/productname')->name('productname.')->controller(productnameController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{setting}','update')->name('update');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/show/{id}','show')->name('show');
            Route::delete('/alldelete','deleteAll')->name('deleteall');

        });


        // ******************** ADMIN SETTING  *************************
        Route::prefix('/messages')->name('messages.')->controller(MessageController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/show/{id}','show')->name('show');
            Route::delete('/alldelete','deleteAll')->name('deleteall');

        });


});


