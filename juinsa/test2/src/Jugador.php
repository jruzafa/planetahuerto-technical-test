<?php
declare(strict_types=1);

namespace Juego;

class Jugador
{

    /**
     * @var $nombre string
     */
    protected $nombre;

    /**
     * @var $jugada array
     */
    protected $jugada = [];

    /**
     * Jugador constructor.
     * @param string $nombre
     * @param array $jugada
     */
    public function __construct( string $nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre( string $nombre ): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return array
     */
    public function getJugada(): array
    {
        return $this->jugada;
    }

    /**
     * @param Carta $cartaRobada
     */
    public function setJugada( Carta $cartaRobada ): void{
        array_push($this->jugada, $cartaRobada);
    }

    public function compruebaPasa(): bool{
        return ($this->getPuntuacionTotal() > 7.5) ? true : false;
    }

    public function compruebaJugada(): float{
        return $this->getPuntuacionTotal();
    }

    protected function getPuntuacionTotal(): float{
        $total = 0;

        foreach ($this->jugada as $carta){

            if($carta->getNumero() >= 10 && $carta->getNumero() <= 12 ){
                $total += 0.5;
            }else{
                $total += $carta->getNumero();
            }
        }

        return $total;
    }

}