<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'expiration_day',
        'description',
        'price',
        'image'
        ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }

    public function getFoods(){
        return Food::all();
    }
}
