<?php
declare(strict_types=1);

namespace Juego;

class Carta
{

    /**
     * @var $palo string
     */
    protected $palo;

    /**
     * @var $numero int
     */
    protected $numero;

    /**
     * Carta constructor.
     * @param string $palo
     * @param int $numero
     */
    public function __construct( string $palo, int $numero )
    {
        $this->palo   = $palo;
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function getPalo(): string
    {
        return $this->palo;
    }

    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     */
    public function setNumero( int $numero ): void
    {
        $this->numero = $numero;
    }

    /**
     * @param string $palo
     */
    public function setPalo( string $palo ): void
    {
        $this->palo = $palo;
    }

}