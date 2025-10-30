<?php declare(strict_types=1);

namespace Dell\Exercici_2\Tests;

use Dell\Exercici_2\SensorVelocidad;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

Final class SensorVelocidadTest extends TestCase{

    #[TestDox ("Comprobar si la velocidad es muy lenta")]
    #[Test]
    public function testMuyLento(): void{
        $sensor = new SensorVelocidad(20);
        $this -> assertSame (true, $sensor -> muyLento());
    }
    #[TestDox ("Comprobar si la velocidad es adecuada")]
    #[Test]
    public function testVelocidadAdecuada(): void{
        $sensor = new SensorVelocidad(50);
        $this -> assertSame (true, $sensor -> velocidadAdecuada());
    }
    #[TestDox ("Comprobar si la velocidad es exceso leve")]
    #[Test]
    public function testExcesoLeve(): void{
        $sensor = new SensorVelocidad(70);
        $this -> assertSame (true, $sensor -> excesoLeve());
    }
    #[TestDox ("Comprobar si la velocidad es exceso moderado")]
    #[Test]
    public function testExcesoModerado(): void{
        $sensor = new SensorVelocidad(90);
        $this -> assertSame (true, $sensor -> excesoModerado());
    }
    #[TestDox ("Comprobar si la velocidad es exceso grave")]
    #[Test]
    public function testExcesoGrave(): void{
        $sensor = new SensorVelocidad(120);
        $this -> assertSame (true, $sensor -> excesoGrave());
    }

}
?>