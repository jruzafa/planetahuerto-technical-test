<?php
declare(strict_types=1);

namespace Juego;

class Juego {

    /**
     * @var $baraja array
     */
    protected $baraja;

    /**
     * @var $jugador Jugador
     */
    protected $jugador;

    /**
     * Juego constructor.
     * @param array $baraja
     * @param Jugador $jugador
     */
    public function __construct( string $jugador)
    {
        $this->jugador = new Jugador($jugador);

        /*
         * para mejor legibilidad de codigo, se puede utilizar un foreach para generar $baraja
         * */
        $this->baraja = [
            new Carta('oros', 1),
            new Carta('oros', 2),
            new Carta('oros', 3),
            new Carta('oros', 4),
            new Carta('oros', 5),
            new Carta('oros', 6),
            new Carta('oros', 7),
            new Carta('oros', 10),
            new Carta('oros', 11),
            new Carta('oros', 12),
            new Carta('copas', 1),
            new Carta('copas', 2),
            new Carta('copas', 3),
            new Carta('copas', 4),
            new Carta('copas', 5),
            new Carta('copas', 6),
            new Carta('copas', 7),
            new Carta('copas', 10),
            new Carta('copas', 11),
            new Carta('copas', 12),
            new Carta('espadas', 1),
            new Carta('espadas', 2),
            new Carta('espadas', 3),
            new Carta('espadas', 4),
            new Carta('espadas', 5),
            new Carta('espadas', 6),
            new Carta('espadas', 7),
            new Carta('espadas', 10),
            new Carta('espadas', 11),
            new Carta('espadas', 12),
            new Carta('bastos', 1),
            new Carta('bastos', 2),
            new Carta('bastos', 3),
            new Carta('bastos', 4),
            new Carta('bastos', 5),
            new Carta('bastos', 6),
            new Carta('bastos', 7),
            new Carta('bastos', 10),
            new Carta('bastos', 11),
            new Carta('bastos', 12),
        ];
    }

    /**
     * @return Jugador
     */
    public function getJugador(): Jugador{
        return $this->jugador;
    }

    /**
     * @param Jugador $jugador
     */
    public function setJugador( Jugador $jugador ): void{
        $this->jugador = $jugador;
    }

    public function iniciaJuego(): void{
        $this->baraja = shuffle($this->baraja);
    }

    public function debugBaraja(array $cartas): void{
        $this->baraja = $cartas;
    }

    public function pideCarta(): void{
        if($this->jugador->compruebaPasa()) {
            return;
        }

        $cartaRobada = array_shift($this->baraja);
        $this->jugador->setJugada($cartaRobada);
    }

}