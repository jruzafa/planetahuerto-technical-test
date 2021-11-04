<?php
require_once __DIR__.'/vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use Planta\Olmo;
use Planta\Olivo;
use Planta\Manzano;
use Planta\Ficus;

class Caso2Test extends TestCase
{

    public function testCasoNoAbonar(  )
    {

        $lastFertilizerDate = new DateTime('2020-03-01');
        $currentDate        = new DateTime('2020-12-20');

        $olmo    = new Olmo();
        $ficus   = new Ficus();
        $manzano = new Manzano();
        $olivo   = new Olivo();

        $this->assertEquals($olmo->abono($lastFertilizerDate, $currentDate),false);
        $this->assertEquals($ficus->abono($lastFertilizerDate, $currentDate),false);
        $this->assertEquals($manzano->abono($lastFertilizerDate, $currentDate),false);
        $this->assertEquals($olivo->abono($lastFertilizerDate, $currentDate),false);
    }

    public function testCasoAbonar(  )
    {

        $lastFertilizerDate = new DateTime('2020-03-01');
        $currentDate        = new DateTime('2020-03-31');

        $olmo    = new Olmo();
        $ficus   = new Ficus();
        $manzano = new Manzano();
        $olivo   = new Olivo();

        $this->assertEquals($olmo->abono($lastFertilizerDate, $currentDate),true);
        $this->assertEquals($ficus->abono($lastFertilizerDate, $currentDate),true);
        $this->assertEquals($manzano->abono($lastFertilizerDate, $currentDate),true);
        $this->assertEquals($olivo->abono($lastFertilizerDate, $currentDate),true);
    }

}
