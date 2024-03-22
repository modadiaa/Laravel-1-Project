<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use \Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\VarDumper\VarDumper;

class SettingController extends Controller
{
    public function index()
    {
        $data =  Setting::first();
        return view('admin.setting.index',[
            'data'  => $data
           ]);
    }

    public function update(Request $request, Setting $setting)
    {
        $data = [
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
        foreach (config('app.languages') as $key => $value) {
            $data[$key . '*.title'] = 'nullable|string';
            $data[$key . '*.description'] = 'nullable|string';
        }
        $validatedData = $request->validate($data);
        $setting->update($request->except('image', '_token'));

        if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = Str::uuid() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path = 'images/' . $filename;
            $setting->update(['logo' => $path]);
        }
        return redirect('dashboard/setting');
    }


}
