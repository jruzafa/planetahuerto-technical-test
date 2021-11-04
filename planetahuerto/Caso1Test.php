<?php
require_once __DIR__.'/vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use Planta\Olmo;
use Planta\Olivo;
use Planta\Manzano;
use Planta\Ficus;

class Caso1Test extends TestCase
{

    public function testCaso1PuntoA(  )
    {

      //  $currentMonth = 8;
        $currentMonth = 7;

        $olmo    = new Olmo($currentMonth);
        $ficus   = new Ficus($currentMonth);
        $manzano = new Manzano($currentMonth);
        $olivo   = new Olivo($currentMonth);

        $this->assertEquals($olmo->riego(),'muy frecuente');
        $this->assertEquals($ficus->riego(),'muy frecuente');
        $this->assertEquals($manzano->riego(),'muy frecuente');
        $this->assertEquals($olivo->riego(),'muy frecuente');
    }

    public function testCaso1PuntoB(  )
    {

        //  $currentMonth = 8;
        $currentMonth = 1;

        $olmo    = new Olmo($currentMonth);
        $ficus   = new Ficus($currentMonth);
        $manzano = new Manzano($currentMonth);
        $olivo   = new Olivo($currentMonth);

        $this->assertEquals($olmo->riego(),'muy frecuente');
        $this->assertEquals($manzano->riego(),'frecuente');
        $this->assertEquals($ficus->riego(),'poco frecuente');
        $this->assertEquals($olivo->riego(),'poco frecuente');

    }

}
