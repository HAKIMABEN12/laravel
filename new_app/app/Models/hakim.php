<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hakim extends Model
{
    use HasFactory;
    protected $table = 'samuel';
    protected $fillable = ['email', 'password','image'];

}
