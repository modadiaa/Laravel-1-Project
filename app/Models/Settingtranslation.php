<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settingtranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['title', 'description'];

    public function setting()
    {
       return $this->belongsTo(Setting::class );
    }

}
