<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opdracht extends Model
{
    use HasFactory;

    protected $fillable = [
        'opdracht_naam',
        'user_id',
        'opdracht_beschrijving',
        'opdracht_type',
    ];
    protected $table = "opdrachten";
}
