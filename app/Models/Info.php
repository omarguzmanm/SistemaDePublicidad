<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'url', 'user_id', 'cover'];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

        protected $guarded = ['id'];

    public function url_redirect()
    {
        return $this->id ? 'info.update' : 'info.store';
    } 

    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }
}
