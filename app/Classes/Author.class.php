<?php

use inc\Api\BookAuthorInterface;
use inc\Api\Data\AuthorInterface;

    class Author extends User implements AuthorInterface , BookAuthorInterface{

        private float $authorRating;
        private int $authorAmountOfPeopleRated;
        private int $authorNumTitles;
        private array $authorTitles;
        private string $authorDescription;

        /**
         * @return string
         */
        public function addOwnBook()                               : string
        {
            $feedback = "";
            return $feedback;
        }

        /**
         * @param int $bookId
         * @return string
         */
        public function editOwnBook(int $bookId)                   : string
        {
            $feedback = "";
            return $feedback;
        }

        /**
         * @param int $bookId
         * @return string
         */
        public function deleteOwnBook(int $bookId)                 : string
        {
            $feedback = "";
            return $feedback;
        }

        /**
         * @param int $authorId
         * @return float
         */
        public function authorRating(int $authorId)                :? float
        {
            return $this->authorRating;
        }

        /**
         * @param int $authorId
         * @return int
         */
        public function authorAmountOfPeopleRated(int $authorId)   : int
        {
            return $this->authorAmountOfPeopleRated;
        }

        /**
         * @param int $authorId
         * @return int or null
         */
        public function authorNumTitles(int $authorId)             :? int
        {
            return $this->authorNumTitles;
        }

        /**
         * @param int $authorId
         * @return array or null
         */
        public function authorTitles(int $authorId)                :? array
        {
            return $this->authorTitles;
        }

        /**
         * @param int $authorId
         * @return string
         */
        public function authorDescription(int $authorId)           : string
        {
            return $this->authorDescription;
        }
        
        /**
         * @param int $bookId
         * @return string
         */
        public function rentBook(int $bookId)                      : string
        {
            $feedback = "";
            return $feedback;
        }
    }