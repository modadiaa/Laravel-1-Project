<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Prodname extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'description','keyword','slug'];
    protected $fillable = [ 'id', 'created_at', 'updated_at'];

    public function prodnametranslation()
    {
        return $this->hasMany(Prodnametranslation::class);
    }

}


