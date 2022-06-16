<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receiver extends Model
{
    use HasFactory;
    protected $table ="receiver";
    protected $fillable=['name','email','phone_number'];
  
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
        



  

}
