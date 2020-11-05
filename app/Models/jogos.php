<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jogos extends Model
{
    use HasFactory;
    protected $table = 'jogos';
    protected $primaryKey = 'id_jogos';
    protected $fillable = ['nome_time', 'resultado'];
}
