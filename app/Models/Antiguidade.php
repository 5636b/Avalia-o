<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antiguidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'marca',
        'Fbano',
        'preco'
    ];

    public function Old()
    {
        return $this->belongsTo(User::class);
    }
}
