<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable=["member_id","book_id","borrow_date","due_date"];
    /** @use HasFactory<\Database\Factories\BorrowFactory> */
    use HasFactory;
    public function Member(){
        return $this->belongsTo(Member::class);
    }
    public function book(){
        return $this->belongsTo(book::class);
    }
    public function returnmodel(){
        return $this->hasMany(ReturnModels::class);
    }
}
