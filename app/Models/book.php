<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable=['title','author_id','publisher_id','edition','category_id','quantity','image'];
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
    public function borrows(){
        return $this->hasMany(Borrow::class);
    }
}
