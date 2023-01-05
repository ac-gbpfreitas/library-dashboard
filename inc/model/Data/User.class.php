<?php

    use inc\Api\Data\UserInterface;

    class User implements UserInterface {

        private string    $_id;
        private string $firstName;
        private string $lastName;
        private string $email;
        private string $username;
        private string $password;
        private int    $userCategory;

        /**
         * @return string $id;
         */
        public function getId() : string
        {
            return $this->_id;
        }

        /**
         * @return string $firstName;
         */
        public function getFirstName() : string
        {
            return $this->firstName;
        }

        /**
         * @return string $lastName;
         */
        public function getLastName(): string
        {
            return $this->lastName;
        }

        /**
         * @return string $email;
         */
        public function getEmail() : string
        {
            return $this->email;
        }

        /**
         * @return string $username;
         */
        public function getUsername() : string
        {
            return $this->username;
        }

        /**
         * @return string $password;
         */
        public function getPassword(): string
        {
            return $this->password;
        }

        /**
         * @return int $userCategory;
         */
        public function getUserCategory() : int
        {
            return $this->userCategory;
        }

        /**
         * @param string id
         */
        public function setId(string $id) : void {
            $this->_id = $id;
        }

    }