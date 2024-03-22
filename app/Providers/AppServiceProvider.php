<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

use App\Models\Contact;
use App\Models\Setting;
use App\Models\About;
use App\Models\Category;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);

        // $slider = Slider::get();
        // $underslider = Underslider::get();
        $setting = Setting::checkSettings();
        $contact = Contact::get();
        $about = About::get();
        $categories = Category::with('children')->where('parent' , 0)->orWhere('parent' , null)->get();


       // $lastFivePosts = Post::with('category','user')->orderBy('id')->limit(5)->get();
        View()->share([
            'contact'=>$contact,
            'setting'=>$setting,
            'about'=>$about,
            'categories'=>$categories,
        ]);

    }

    // public function index(){
    //     $page = 'home' ;
    //     $slider = Slider::get();
    //     $underSlider = Underslider::get();
    //     $about = About::get();
    //     $category = Category::limit('4')->get();
    //     $news = News::limit('4')->get();
    //     $gallery = Gallery::get();
    //     $contact = Contact::get();

    //     return view('home.site',[
    //         'page' => $page ,
    //         'slider' => $slider,
    //         'underSlider' => $underSlider,
    //         'about' => $about,
    //         'category'=>$category,
    //         'news'=>$news,
    //         'gallery'=>$gallery,
    //         'contact'=>$contact,
    //     ]);
    // }

}
