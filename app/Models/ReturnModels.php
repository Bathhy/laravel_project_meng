<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnModels extends Model
{
     protected $fillable=['borrow_id','return_date'];
    /** @use HasFactory<\Database\Factories\ReturnModelsFactory> */
    use HasFactory;
    public function borrow(){
        return $this->belongsTo(Borrow::class);
    }
}
