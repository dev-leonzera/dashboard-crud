<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contatos';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'email', 'telefone', 'endereco'];
}
