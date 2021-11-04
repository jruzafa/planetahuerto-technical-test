<?php
namespace Planta;

class Olmo extends Bonsai {

    protected $riegoPersonalizado = 'muy frecuente';

    /**
     * @return string
     */
    public function pulverizar()
    {
        return $this->riego();
    }

}
