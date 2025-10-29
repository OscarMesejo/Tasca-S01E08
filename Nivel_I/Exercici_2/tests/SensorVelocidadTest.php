<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

Final class SensorVelocidadTest extends TestCase{

    #[TestDox ("Comprobar si la velocidad es muy lenta")]
    #[Test]
    public function testMuyLento(): void{
        $sensor = new SensorVelocidad(20);
        $this -> assertSame (treu, $sensor -> muyLento());
    }

}
?>