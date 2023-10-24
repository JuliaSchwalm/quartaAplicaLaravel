<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
      protected $table = 'funcionarios'; 
    protected $fillable = ['nome', 'cpf', 'id_setor'];

    public function setor()
    {
        return $this->belongsTo(Setor::class, 'id_setor');
    }
  }
