<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{
    use HasFactory;
    protected $table = 'noticias';
    protected $primaryKey = 'id_noticia';
    protected $fillable = ['titulo', 'conteudo', 'referencias', 'fonte', 'placares', 'data_publicacao', 'id_usuario'];
}
