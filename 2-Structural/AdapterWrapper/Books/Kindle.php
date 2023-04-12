<?php

namespace Structural\AdapterWrapper\Books;

use Structural\AdapterWrapper\Interfaces\EBook;

class Kindle implements EBook
{
    private int $page = 1;
    private int $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }

    public function unLock()
    {

    }
}