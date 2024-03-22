<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SliderTranslation extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['id','slider_id','locale','title', 'description'];


    public function slider()
    {
       return $this->belongsTo(Slider::class );
    }


}
