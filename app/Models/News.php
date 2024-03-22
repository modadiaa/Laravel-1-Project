<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class News extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    public $translatedAttributes = ['title', 'description','keyword','slug'];
    protected $fillable = [ 'id', 'image', 'created_at', 'updated_at'];

    public function newstranslation()
    {
        return $this->hasMany(NewsTranslation::class);
    }
}
