<?php

namespace App\Models;

use Attribute;
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
    protected $appends=['description_short'];
}
