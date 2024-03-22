<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\SoftDeletes;


class Slider extends Model implements TranslatableContract
{
    use HasFactory , Translatable , SoftDeletes;

    public $translatedAttributes = ['title', 'description'];
    protected $fillable = [ 'id', 'image', 'link', 'created_at', 'updated_at', 'deleted_at'];


    public function slidertranslation()
    {
        return $this->hasMany(SliderTranslation::class);
    }


}
