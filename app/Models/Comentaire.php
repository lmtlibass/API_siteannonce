<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentaire extends Model
{
    use HasFactory;
    protected $fillable = ['libelle', 'date'];
}
