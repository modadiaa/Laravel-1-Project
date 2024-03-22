<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abouttranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['title', 'description','keyword','slug'];

    public function about()
    {
       return $this->belongsTo(About::class );
    }

}
