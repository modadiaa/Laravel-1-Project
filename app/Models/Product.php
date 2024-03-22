<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Product extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    public $translatedAttributes = ['title', 'description','keyword' , 'smalldesc','slug'];
    protected $fillable = ['id', 'image', 'category_id', 'created_at', 'updated_at', 'deleted_at'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function producttranslation()
    {
        return $this->hasMany(ProductTranslation::class);
    }


}
