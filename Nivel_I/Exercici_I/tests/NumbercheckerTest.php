<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

Final class NumbercheckerTest extends TestCase{

    #[TestDox("Comprobar si un número es par")]
    #[Test]
    public function IsEven(): void{
        $numberChecker = new NumberChecker(8);
        $this -> assertSame($numberChecker -> isEven(8));


    }
}

?>