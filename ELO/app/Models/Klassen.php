<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

  
class Klassen extends Model
{
    use HasFactory;

    protected $table = "klassen";
  
    protected $fillable = [
        'class_name'
    ];

    public function users() 
    {
        return $this->hasMany(User::class, 'class_name', 'class_name');
	}
}  