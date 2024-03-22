<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Underslidertranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','underslider_id','locale','title', 'description','bgcolor'];


    public function underslider()
    {
       return $this->belongsTo(Underslider::class );
    }
}
