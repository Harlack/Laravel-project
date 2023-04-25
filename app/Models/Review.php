<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function tree(){
        return $this->belongsTo(Tree::class);
    }
    
    public function counters(){
        return $this->hasMany(Counter::class);
    }
    use HasFactory;
}
