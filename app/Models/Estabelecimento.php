<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    use HasFactory;

    protected $table = 'estabelecimentos';

    protected $fillable = [
        'user_id',
        'nome',
        'cnpj',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
