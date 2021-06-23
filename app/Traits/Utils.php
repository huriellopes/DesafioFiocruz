<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Str;

trait Utils
{
    /**
     * @param $variavel
     * @return string|string[]|null
     */
    public function clearTags($variavel)
    {
        return preg_replace('(<(/?[^\>]+)>)', '', $variavel);
    }

    /**
     * @param $value
     * @param string $formato
     * @return string
     */
    public function dateTimeFormat($value, $formato = 'd/m/Y H:i:s'): string
    {
        if ($value) {
            return Carbon::parse($value)->format($formato);
        } else {
            return '';
        }
    }

    /**
     * @param $value
     * @param string $formato
     * @return string
     */
    public function dateFormat($value, $formato = 'd/m/Y'): string
    {
        if ($value) {
            return Carbon::parse($value)->format($formato);
        } else {
            return '';
        }
    }

    /**
     * @param $nu_cpf_cnpj
     * @return string|string[]|null
     */
    public function maskCpfCnpj($nu_cpf_cnpj)
    {
        if (strlen($nu_cpf_cnpj) > 11)
        {
            return preg_replace('@^(\d{2,3})(\d{3})(\d{3})(\d{4})(\d{2})$@', '$1.$2.$3/$4-$5', $nu_cpf_cnpj);
        } else {
            return preg_replace('@^(\d{3})(\d{3})(\d{3})(\d{2})$@', '$1.$2.$3-$4', $nu_cpf_cnpj);
        }
    }

    /**
     * @param $valor
     * @return string|string[]|null
     */
    public function clearMask($valor)
    {
        if (!empty($valor)){
            $valor =  preg_replace('/\D+/', '', $valor);
        }

        return $valor;
    }

    /**
     * @param string $fullName
     * @return string
     */
    public function getFirstName(string $fullName) : string
    {
        $name = explode(' ', $fullName);
        $firstName = array_shift($name);
        $lastName = array_pop($name);

        return ucfirst(Str::lower($firstName)) . ' ' .ucfirst(Str::lower($lastName)) ?? '';
    }
}
