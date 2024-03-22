<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;

use App\Models\SliderTranslation;
use App\Models\Underslider;
use App\Models\Underslidertranslation;
use App\Models\About;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Prodname;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('layouts.frontbase');
    // }

    public static function maincategoryList(){
        return Category::where('parent' , '=' , 0)->with('children')->get();
    }


    public function index(){
        $page = 'home' ;
        $slider = Slider::get();
        $underSlider = Underslider::get();
        $about = About::limit('1')->get();
        $category = Category::limit('4')->get();
        $news = News::limit('4')->get();
        $gallery = Gallery::get();
        $contact = Contact::get();

        return view('home.site',[
            'page' => $page ,
            'slider' => $slider,
            'underSlider' => $underSlider,
            'about' => $about,
            'category'=>$category,
            'news'=>$news,
            'gallery'=>$gallery,
            'contact'=>$contact,
        ]);
    }


    public function about(){
        $aboutpage = About::limit('1')->get();
        return view('home.aboutpage',[
            'aboutpage' => $aboutpage ,
        ]);
    }




    public function news(){
        $newspage = News::get();
        return view('home.newspage',[
            'newspage' => $newspage ,
        ]);
    }


    public function newsdesc($id){
        $news = News::get();
        $category =  Category::where('parent' , '=' , 0)->with('children')->get();
        $newspage =  News::find($id);
        $newsfinal =  News::where('id' , '=' , $id)->get();
        return view('home.newsfinal',[
            'newspage'=>$newspage,
            'newsfinal' => $newsfinal ,
            'category'=>$category,
            'news'=>$news,
        ]);
    }



    public function contact(){
        $contactpage = Contact::get();
        return view('home.contactpage',[
            'contactpage' => $contactpage ,
        ]);
    }

    public  function categoryproducts($id){
        $category =  Category::find($id);
        // $subcategory =  Category::get();
        $products = DB::table('products')->where('category_id' , $id)->get();
        return view('home.categoryproducts',[
            'category' => $category,
            'products' => $products,
        ]);
    }



    public function category(){
        $category = Category::get();
        $categorypage =  Category::where('parent' , '=' , 0)->with('children')->get();
        return view('home.categorypage',[
            'categorypage' => $categorypage ,
            'category'=>$category
        ]);
    }



    public function subcategory($id){
        $category =  Category::find($id);
        $subcategory =  Category::where('parent' , '=' , $id)->get();
        $products = DB::table('products')->where('category_id' , $id)->get();

        return view('home.subcategories',[
            'category' => $category,
            'subcategory' => $subcategory,
            'products' => $products,
        ]);
    }



    public function productname(){
        $productname = Prodname::get();
        return view('home.productname',[
            'productname' => $productname ,
        ]);

    }





}
