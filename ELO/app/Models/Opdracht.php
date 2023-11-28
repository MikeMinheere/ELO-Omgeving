<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opdracht extends Model
{
    use HasFactory;

    protected $fillable = [
        'opdracht_naam',
        'student_number',
        'opdracht_beschrijving',
        'opdracht_type',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'student_number', 'student_number');
    }

    protected $table = "opdrachten";
}
