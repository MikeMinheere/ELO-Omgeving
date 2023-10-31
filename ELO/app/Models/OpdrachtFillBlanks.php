<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpdrachtFillBlanks extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'opdracht_beschrijving',
        'input',
        'output'
    ];
    
    public function opdracht(): HasMany
    {
        return $this->hasMany(Opdracht::class);
    }
}
