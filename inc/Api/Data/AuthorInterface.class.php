<?php

namespace inc\Api\Data;

/**
 * Author interface
 */
interface AuthorInterface {

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

    /**
     * @param int $authorId
     * @return float
     */
    public function authorRating(int $authorId)                :? float;

    /**
     * @param int $authorId
     * @return int
     */
    public function authorAmountOfPeopleRated(int $authorId)   : int;

    /**
     * @param int $authorId
     * @return int or null
     */
    public function authorNumTitles(int $authorId)             :? int;

    /**
     * @param int $authorId
     * @return array or null
     */
    public function authorTitles(int $authorId)                :? array;

    /**
     * @param int $authorId
     * @return string
     */
    public function authorDescription(int $authorId)           : string;
    
    /**
     * @param int $bookId
     * @return string
     */
    public function rentBook(int $bookId)                      : string;

}