<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';

    protected $fillable = ['nome', 'descricao', 'imagem', 'link'];
    protected $guarded = ['id', 'created_at', 'update_at'];
}
