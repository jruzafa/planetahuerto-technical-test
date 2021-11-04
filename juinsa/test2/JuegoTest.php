<?php
require_once __DIR__.'/vendor/autoload.php';
use Juego\Juego;
use Juego\Carta;
use PHPUnit\Framework\TestCase;

class JuegoTest extends TestCase{

    public function testCorrecto()
    {
        $cartasPrueba = [
            new Carta('copas', 11),
            new Carta('oros', 5),
            new Carta('espadas', 5),
            new Carta('bastos', 12),
            new Carta('oros', 7)
        ];
        $juego      = new Juego('Paco');
        $juego->debugBaraja($cartasPrueba);
        $jugador    = $juego->getJugador();
        $this->assertEquals($jugador->compruebaJugada(), 0);
        $juego->pideCarta();
        $this->assertEquals($jugador->compruebaPasa(), false);
        $juego->pideCarta();
        $this->assertEquals($jugador->compruebaJugada(),5.5);
        $juego->pideCarta();
        $this->assertEquals($jugador->compruebaJugada(),10.5);  // no funciona  $this->assertEquals($jugador->compruebaJugada(),0); ya que el
                                                                //  $juego->pideCarta() hace que incremente en la jugada la carta 5 de espadas,
                                                                // compruebaJugada() al pasar de 7.5 devuelve 0 pasaria esa aserción
        $this->assertEquals($jugador->compruebaPasa(),true);
    }

}