<?php

namespace App\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self MASCULINO()
 * @method static self FEMININO()
 * @method static self OUTROS()
 */
class GeneroEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'MASCULINO' => 'Masculino',
            'FEMININO' => 'Feminino',
            'OUTROS' => 'Outros'
        ];
    }
}
