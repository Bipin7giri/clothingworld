<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class senderinfo extends Model
{
    use HasFactory;
    protected $table ="senderinfo";
    protected $fillable=['name','c_name','c_size','address','email','phone_number','message','c_quantity','image'];
   


public function user()
{
    return $this->belongsTo(User::class);
}
    
  
}
