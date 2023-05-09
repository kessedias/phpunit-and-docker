<?php

namespace app\libraries;

require_once(__DIR__.'/../../vendor/autoload.php');

class helpers {

    /**
     * Obtém qual é o número do dia do ano com base na data inserida. Ex. (Dia 360)
     * @param string 'Y-m-d' ("2023-05-05)
     * @return int $day -> Dia numérico (360)
     */
    public function getCurrentDayOfTheYear($date) : int{

        //abre uma instância de datetime para converter a string
        $datetime = \DateTime::createFromFormat('Y-m-d', $date);

        //verifica se o tamanho não é maior que 10
        $length = strlen($date) === 10;

        //verifica se a data está entre 1 de janeiro de 1900
        //e 31 de dezembro de 2022
        $timestamp = strtotime($date);
        $min_timestamp = mktime(0, 0, 0, 1, 1, 1900);
        $max_timestamp = mktime(23, 59, 59, 12, 31, 2022);
        $range_limit = $timestamp < $min_timestamp || $timestamp > $max_timestamp;

        //verifica se a data tem um formato válido
        $format = $datetime && $datetime->format('Y-m-d') === $date;

        if($length && !$range_limit & $format){

            //+1 é por conta dele começar em 0
            $current_day = date('z', strtotime($date)) + 1;
            
        }else{
            
            //se der ruim nas validações ele retorna 0
            return 0;
        }
        
        unset($date, $length, $range_limit, $format, $timestamp, $min_timestamp, $max_timestamp, $datetime);

        return $current_day;
    }
}