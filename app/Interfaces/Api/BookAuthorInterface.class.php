<?php

namespace Interface\Api;

interface BookAuthorInterface {

       /**
     * @return string
     */
    public function addOwnBook()                               : string;

    /**
     * @param int $bookId
     * @return string
     */
    public function editOwnBook(int $bookId)                   : string;

    /**
     * @param int $bookId
     * @return string
     */
    public function deleteOwnBook(int $bookId)                 : string;
    
}