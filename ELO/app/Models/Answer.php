<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'opdracht_id',              
        'user_id',
        'opdracht_antwoord',
    ];

    public function opdracht(){
        return $this->hasMany(opdracht::class, 'opdracht_naam', 'opdracht_id');
    }
    protected $table = "opdracht_answer";
}
