<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use Structural\AdapterWrapper\Adapters\EBookAdapter;
use Structural\AdapterWrapper\Books\Kindle;
use Structural\AdapterWrapper\Books\PaperBook;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}