<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use phpDocumentor\Reflection\Types\Self_;

class Setting extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'description'];
    protected $fillable = [ 'id', 'logo', 'created_at', 'updated_at'];

    public function settingtranslation()
    {
        return $this->hasMany(Settingtranslation::class);
    }

    public static function checkSettings()
    {
        $settings = Self::all();
        if (count($settings) < 1) {
            $data = [
                'id' => 1,
            ];
            foreach (config('app.languages') as $key => $value) {
                $data[$key]['title'] = $value;
            }
            Self::create($data);
        }

        return Self::first();
    }



}
