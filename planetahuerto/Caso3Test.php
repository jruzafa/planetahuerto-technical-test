<?php
require_once __DIR__.'/vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use Planta\Olmo;
use Planta\Olivo;
use Planta\Manzano;
use Planta\Ficus;

class Caso3Test extends TestCase
{

    public function testCaso(  )
    {

      //  $currentMonth = 8;
        $currentMonth = 3;

        $olmo    = new Olmo($currentMonth);
        $ficus   = new Ficus($currentMonth);
        $manzano = new Manzano($currentMonth);
        $olivo   = new Olivo($currentMonth);

        $this->assertEquals($olmo->transplante(),true);
        $this->assertEquals($ficus->transplante(),true);
        $this->assertEquals($manzano->transplante(),true);
        $this->assertEquals($olivo->transplante(),true);

    }

}
