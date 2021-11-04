<?php

namespace Planta;

class Bonsai implements BonsaiInterface
{

    protected $riegoPersonalizado;

    protected $mesActual;

    /**
     * Bonsai constructor.
     * @param null $mesActual
     */
    public function __construct( $mesActual = null )
    {
        if (is_null($mesActual)) {
            $this->mesActual = date('m');
        } else {
            $this->mesActual = $mesActual;
        }

    }

    /**
     * @return string
     */
    public function riego()
    {

        if (in_array($this->mesActual, [7, 8])) {
            return 'muy frecuente';
        } else {
            return $this->riegoPersonalizado;
        }

    }

    /**
     * @return boolean
     */
    public function abono( $lastFertilizerDate = null, $currentDate = null )
    {

        if (!is_null($lastFertilizerDate) && !is_null($currentDate)) {

            $currentMonth = (int)$currentDate->format('m');
            $interval     = $lastFertilizerDate->diff($currentDate);

            if ($interval->days < 30) {
                return false;
            } else if (in_array($currentMonth, range(3, 5)) || in_array($currentMonth, range(9, 11))) {
                return true;
            }

        }

        return false;
    }

    /**
     * @return boolean
     */
    public function transplante()
    {

        if ($this->mesActual == 3) {
            return true;
        }

        return false;
    }

    public function pepe()
    {

    }

}
