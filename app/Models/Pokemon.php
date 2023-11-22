<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';
    protected $fillable = [
        'name',
        'description',
        'image',
        'types_id',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'types_id');
    }
}
