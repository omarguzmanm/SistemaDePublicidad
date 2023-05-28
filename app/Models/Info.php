<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'url', 'user_id'];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
