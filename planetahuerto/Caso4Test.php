<?php
require_once __DIR__.'/vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use Planta\Olmo;
use Planta\Olivo;
use Planta\Manzano;
use Planta\Ficus;

class Caso4Test extends TestCase
{

    public function testCaso(  )
    {

      //  $currentMonth = 8;
        $currentMonth = 7;
        $olmo         = new Olmo($currentMonth);

        $this->assertEquals($olmo->pulverizar(),$olmo->riego());

    }

}
