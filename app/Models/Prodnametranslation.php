<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodnametranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','productname_id','locale','title','description','keyword','slug'];

    public function prodname()
    {
       return $this->belongsTo(Prodname::class );
    }
}


