<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Step;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['title','completed','user_id','detail'];

    public function steps()
    {
        return $this->hasMany(Step::class);
    }
}


