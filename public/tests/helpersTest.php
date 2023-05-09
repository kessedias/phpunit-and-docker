<?php

namespace tests;

require_once(__DIR__.'/../vendor/autoload.php');

use app\libraries\helpers;
use PHPUnit\Framework\TestCase;

class helpersTest extends TestCase{

    public function test_if_date_is_valid(){

        $helpers = new helpers();

        //Testes que com informações inválidas deve retornar 0
        $this->assertEquals(0, $helpers->getCurrentDayOfTheYear('2023-12-31'));
        $this->assertEquals(0, $helpers->getCurrentDayOfTheYear('22-12-01'));
        $this->assertEquals(0, $helpers->getCurrentDayOfTheYear('2022-12-1'));
        $this->assertEquals(0, $helpers->getCurrentDayOfTheYear('2022/12/01'));
        $this->assertEquals(0, $helpers->getCurrentDayOfTheYear('lorem ipsum'));
        
        //Teste com uma informação válida deve retornar a quantia de dias exata
        $this->assertEquals(10, $helpers->getCurrentDayOfTheYear('2022-01-10'));
        $this->assertEquals(365, $helpers->getCurrentDayOfTheYear('2022-12-31'));
    }
}