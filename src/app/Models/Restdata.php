<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    protected $fillable = ['message','url'];
    protected $table = 'restdatas';
    use HasFactory;
}
