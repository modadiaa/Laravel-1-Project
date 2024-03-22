<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class About extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'description','keyword','slug'];
    protected $fillable = [ 'id', 'image',  'created_at', 'updated_at'];

    public function abouttranslation()
    {
        return $this->hasMany(Abouttranslation::class);
    }

}
