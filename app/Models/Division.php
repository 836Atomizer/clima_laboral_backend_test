<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['division_name', 'level' , 'quantity'];

    public function ambassador(){

        return $this->belongsTo(Ambassador::class);

    }

}
