<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class blog extends Model
{
    use HasFactory;

    public function has(){
        return $this->belongsTo(User::class);
    }
}
