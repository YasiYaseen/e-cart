<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", 'price', 'image', 'description'
    ];
    public function getDescriptionShortAttribute(){
        if(strlen($this->description)>70){
            return substr($this->description,0,70)."...";

        }else{
          return $this->description;
        }
    }
    public function price():Attribute
    {
        return Attribute::make(
            get: fn($value) => "₹".number_format($value,2),
            set: fn($value) => (float) str_replace([',','₹'], '', $value),
        );

    }
    protected $appends=['description_short'];
}
