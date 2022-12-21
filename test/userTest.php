<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

//define("__DIR__", "C:/xampp/htdocs/videGrenier/");
use Src\Nome;


final class userTest extends TestCase
{
    public function testRandom(): void
    {
        $this->assertSame(0, 0);
    }
/*

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
    */
}






?>