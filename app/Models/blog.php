<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class blog extends Model
{
    use HasFactory;
  protected $fillable=[
    'title',
    'body',
    'pics'
  ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
