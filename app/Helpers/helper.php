<?php

namespace App\Helpers;

class Helper
{
    public static function validarCPF(string $cpf): bool
    {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        for ($i = 9; $i < 11; $i++) {
            for ($j = 0, $soma = 0; $j < $i; $j++) {
                $soma += $cpf[$j] * (($i + 1) - $j);
            }

            $soma = (($resto = $soma % 11) < 2) ? 0 : 11 - $resto;

            if ($cpf[$i] != $soma) {
                return false;
            }
        }

        return true;
    }
}
