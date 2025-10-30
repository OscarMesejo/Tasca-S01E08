<?php declare(strict_types=1);

namespace Dell\Exercici_I\Tests;

use Dell\Exercici_I\NumberChecker;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

Final class NumberCheckerTest extends TestCase{

    #[TestDox("Comprobar si un número es par")]
    #[Test]
    public function testEvenNumber(): void{
        $numberChecker = new NumberChecker(8);
        $this -> assertSame(true, $numberChecker -> isEven());
    }
    
    #[TestDox("Comprobar si un número es impar")]
    #[Test]
    public function testOddNumber(): void{
        $numberChecker = new NumberChecker(3);
        $this -> assertSame(false, $numberChecker -> isEven());
    }

    #[TestDox("Comprobar si un número es positivo")]
    #[Test]
    public function testPositiveNumber(): void{
        $numberChecker = new NumberChecker(8);
        $this -> assertSame(true, $numberChecker-> isPositive());
    }

    #[TestDox("Comprobar si un número es negativo")]
    #[Test]
    public function testNegativeNumber(): void{
        $numberChecker = new NumberChecker(-3);
        $this -> assertSame(false, $numberChecker-> isPositive());
    }

    #[TestDox("Comprobar si el número cero no es positivo")]
    #[Test]
    public function testZeroNumber(): void {
        $numberChecker = new NumberChecker(0);
        $this ->assertSame(false, $numberChecker->isPositive());
    }

}

?>