<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{

    protected $guarded = ['id'];

    use HasFactory;

    // Relacion uno a muchos inversa

    public function course() {
        return $this->belongsTo('App\Models\Course');
    }
}
