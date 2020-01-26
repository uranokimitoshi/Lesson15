<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ["id","user_id","content"];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
