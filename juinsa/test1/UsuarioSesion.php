<?php
declare(strict_types=1);

class UsuarioSesion{

    /**
     * @var
     */
    private static $instance;

    /**
     * @var
     */
    private $nombre;

    /**
     * UsuarioSesion constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return UsuarioSesion
     */
    public static function getInstance(): UsuarioSesion{
        if (self::$instance == null)
        {
            self::$instance = new UsuarioSesion();
        }

        return self::$instance;
    }

    /**
     * @param $nombre string
     * @return void
     */
    public function setUsuarioSesion( $nombre ): void{
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getUsuarioSesion(): string{
        return $this->nombre;
    }

}


