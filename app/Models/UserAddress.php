<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable= ['user_id','name','phone','house','street','city','state','pincode'];
    public function addressText(){
        return  $this->name.
        " , ".$this->house.
        " , ".$this->street.
        " , ".$this->city.
        " , ".$this->state.
        " , ".$this->pincode.
        " , ".$this->phone;

    }
}
