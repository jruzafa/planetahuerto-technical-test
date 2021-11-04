<?php
require_once './UsuarioSesion.php';
use PHPUnit\Framework\TestCase;

class UsuarioSesionTest extends TestCase
{
    public function testCorrecto()
    {
        $usuario = UsuarioSesion::getInstance();
        $usuario->setUsuarioSesion('Paco');
        $this->assertEquals($usuario->getUsuarioSesion(), 'Paco');
        $usuario = UsuarioSesion::getInstance();
        $this->assertEquals($usuario->getUsuarioSesion(), 'Paco');
    }
}
