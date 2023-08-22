<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // protected $fillable = ['cpf', 'nome', 'data_nascimento', 'sexo', 'endereco', 'estado', 'cidade', 'status'];
    protected $fillable = ['cpf', 'nome', 'data_nascimento', 'sexo', 'endereco', 'estado', 'cidade'];

    public function getSexoAttribute($value)
    {
        return $value === 'M' ? 'Masculino' : 'Feminino';
    }

    public function setSexoAttribute($value)
    {
        $this->attributes['sexo'] = $value === 'Masculino' || $value === 'M' ? 'M' : 'F';
    }

    // public function getStatusAttribute($value)
    // {
    //     return $value === 'A' ? 'Ativo' : 'Inativo';
    // }

    // public function setStatusAttribute($value)
    // {
    //     $this->attributes['status'] = $value === 'Ativo' || $value === 'A' ? 'A' : 'I';
    // }
}
