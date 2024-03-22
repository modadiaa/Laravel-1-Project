<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;



class Category extends Model implements TranslatableContract

{
    use HasFactory , Translatable;

    public $translatedAttributes = ['title','subtitle', 'description','keyword','slug','direction'];
    protected $fillable = [ 'id', 'image','banner', 'parent', 'created_at', 'updated_at', 'deleted_at'];

    public function parent(){
        return $this->belongsTo(Category::class , 'parent');
    }

    public function children(){
        return $this->hasMany(Category::class , 'parent');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function categorytranslation()
    {
        return $this->hasMany(CategoryTranslation::class);
    }


}
