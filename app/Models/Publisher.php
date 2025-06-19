<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable=['name','adress','phone_number'];
    /** @use HasFactory<\Database\Factories\PublisherFactory> */
    use HasFactory;
     public function books(){
        return $this->hasMany(book::class);
    }
}
