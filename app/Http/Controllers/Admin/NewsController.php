<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsTranslation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{

    public function index(Request $request )
    {
        $data =  News::whereHas('NewsTranslation', function ($q) use ($request) {
                     $q->where('title','LIKE','%'.$request->search .'%')
                       ->orWhere('description','LIKE','%'.$request->search .'%');
                        })->paginate(10);

        return view('admin.news.index',[
        'data'  => $data
       ]);
    }

    // public function index()
    // {
    //     $data =  News::all();
    //     return view('admin.news.index',[
    //         'data'  => $data
    //        ]);
    // }

    public function create()
    {
        $data =  News::all();
        return view('admin.news.create',[
            'data'  => $data
           ]);
    }

    public function store(Request $request)
    {
        $data =  News::create($request->except('image', '_token'));
        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
        }
        $data->save();
        foreach (config('app.languages') as $key => $lang)
        {
            $slug=$request->$key['title'];
            NewsTranslation::where('news_id',$data->id)->where('locale',$key)->update([
                'slug'=> $this->createSlug($slug),
            ]);
        }
        toastr()->success(__('words.success') );
        return redirect('dashboard/news');
    }

    public function edit(News $news,$id)
    {
       $data =  News::find($id);
       $datalist =  News::all();
        return view('admin.news.edit',[
        'data'  => $data ,
        'datalist'  => $datalist
       ]);
    }


    public function show(News $news,$id)
    {
      $data =  News::find($id);
      return view('admin.news.show',[
      'data'  => $data
     ]);

    }


    public function update(Request $request, News $news , $id)
    {
        $data = News::find($id);
        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
        }
        $data->update($request->except('image', '_token'));
        foreach (config('app.languages') as $key => $lang)
        {
            $slug=$request->$key['title'];
            NewsTranslation::where('news_id',$data->id)->where('locale',$key)->update([
                'slug'=> $this->createSlug($slug)
            ]);

        }
        toastr()->success(__('words.update-success') );
        return redirect('dashboard/news');
    }

    public function destroy(News $news , $id)
    {
        $data = News::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/news');
    }

    public function deleteAll(News $news ,Request $request)
    {
        $ids = $request->ids;
        News::whereIn('id', $ids)->delete();
        toastr()->success(__('words.delete-row-success') );
    }

    public function createSlug($text){
        return str_replace(' ','-',$text);
    }


}
