<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $table = 'setores';
    protected $fillable = [
        'nome',
        'sigla'
    ];

    public function users(): HasMany 
    {
        return $this->hasMany(Users::class);
    }

}
