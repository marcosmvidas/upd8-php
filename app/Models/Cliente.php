<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts;
use App\Enums\GeneroEnum;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'nome',
        'data_nascimento',
        'sexo',
        'endereco',
        'estado',
        'cidade'
    ];

    protected $enums = [
        'sexo' => GeneroEnum::class,
    ];

    public function getSexoAttribute($value)
    {
        return $value === 'M' ? 'Masculino' : 'Feminino';
    }

    public function setSexo(): Attribute
    {
        return  Attribute::make(
            set: fn (ClienteSexo $exo) =>$sexo->name,
        );

    }

}
