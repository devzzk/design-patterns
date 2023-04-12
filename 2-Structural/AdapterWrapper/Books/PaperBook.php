<?php

namespace Structural\AdapterWrapper\Books;

use Structural\AdapterWrapper\Interfaces\Book;

class PaperBook implements Book
{
    private int $page;

    public function getPage(): int
    {
        return $this->page;
    }

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }
}