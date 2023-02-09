<?php

namespace Interface\Api\Data;

interface BookInterface {

    /**
     * @param int $bookId
     * @return string
     */
    public function rentBook(int $bookId)                      : string;
    
    /**
     * @
     */
}