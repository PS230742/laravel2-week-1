<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class band extends Model
{
    use HasFactory; 
    protected $fillable = [
        'name','founded','genre','active_til',
    ];

    public function albums()
    {
        return $this->hasMany(album::class);
    }
}
