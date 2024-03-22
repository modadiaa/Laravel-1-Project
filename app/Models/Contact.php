<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Contact extends Model implements TranslatableContract
{
    use HasFactory , Translatable;

    public $translatedAttributes = ['location','slug','keyword','title'];
    protected $fillable = [ 'id', 'phone1', 'phone2','email1','email2','facebook','twitter','youtube','instagram','telegram','whatsapp', 'updated_at', 'deleted_at'];

    public function contacttranslation()
    {
        return $this->hasMany(Contacttranslation::class);
    }

}
