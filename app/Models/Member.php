<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=['name','gender','phone_number'];
    /** @use HasFactory<\Database\Factories\MemberFactory> */
    use HasFactory;
    public function borrows(){
        return $this->hasMany(Borrow::class);
    }
}
