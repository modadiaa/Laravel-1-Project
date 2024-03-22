<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Underslider extends Model implements TranslatableContract
{

    use HasFactory , Translatable ;

    public $translatedAttributes = ['title', 'description','bgcolor'];
    protected $fillable = [ 'id', 'created_at', 'updated_at'];


    public function underslidertranslation()
    {
        return $this->hasMany(Underslidertranslation::class);
    }


}
