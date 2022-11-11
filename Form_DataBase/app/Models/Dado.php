<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'surname', 'phone', 'email', 'address'];
}
