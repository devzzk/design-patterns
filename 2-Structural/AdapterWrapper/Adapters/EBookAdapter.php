<?php

namespace Structural\AdapterWrapper\Adapters;

use Structural\AdapterWrapper\Interfaces\Book;
use Structural\AdapterWrapper\Interfaces\EBook;

class EBookAdapter implements Book
{

    public function __construct(protected EBook $ebook)
    {
    }

    public function getPage(): int
    {
        return $this->ebook->getPage()[0];
    }

    public function open()
    {
        $this->ebook->unLock();
    }

    public function turnPage()
    {
        $this->ebook->pressNext();
    }
}