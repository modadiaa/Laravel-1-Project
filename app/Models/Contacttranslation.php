<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacttranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['location','slug','keyword','title'];

    public function contact()
    {
       return $this->belongsTo(Contact::class );
    }
}
