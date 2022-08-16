<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resttest extends Model
{
    protected $fillable = ['message','url'];
    protected $table = 'resttests';
    use HasFactory;
}
