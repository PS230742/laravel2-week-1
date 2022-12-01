<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','year','times_sold',
    ];
    

    public function songs()
    {
        return $this->hasMany(songs::class);
    }

    public function bands()
    {
        return $this->hasOne(band::class);
    }
}
