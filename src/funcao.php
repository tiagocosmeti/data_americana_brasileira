<?php

namespace Tiagocosmeti\DataAmericanaBrasileira;

class Data
{

    static function data_americana_brasileira($data, $hora = false)
    {

        $data_aux = explode(' ', $data);
        $hora = $data_aux['1'];

        $data_aux = explode('-', $data_aux[0]);
        $data_aux = $data_aux['2'] . '/' .  $data_aux['1']  . '/' .  $data_aux['0'];

        if($hora)
            $data_aux .=  ' ' . $hora;
        
        return $data_aux;

        
    }

}