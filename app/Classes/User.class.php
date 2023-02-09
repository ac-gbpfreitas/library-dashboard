<?php

    use Interface\Api\Data\UserInterface;

    class User implements UserInterface {

        //Make them protected if we keep with Author class as a subclass, for example, else, make them private
        protected string    $_id;
        protected string $firstName;
        protected string $lastName;
        protected string $email;
        protected string $username;
        protected string $password;
        protected int    $userCategory;
        protected string $fullName; //This property is completely optional, can be taken away if preferred
        protected string $dob;
        protected string $address;
        protected string $phone;
        protected string $city;
        protected string $province;
        protected string $picture;
        protected string $notes;

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
        public function getLastName() : string
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
        public function getPassword() : string
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
         * @param string id;
         */
        public function setId(string $id) : void 
        {
            $this->_id = $id;
        }

        /**
         * @return string $fullName;
         */
        public function getFullName() : string
        {
            $this->fullName = "{$this->firstName} {$this->lastName}";
            return $this->fullName;
        }

        /**
         * @return string $dob;
         */
        public function getDateOfBirth() : string
        {
            return $this->dob;
        }

        /**
         * @return string $address;
         */
        public function getAddress() : string
        {
            return $this->address;
        }

        /**
         * @return string $phone or null;
         */
        public function getPhone() : ?string
        {
            return $this->phone;
        }

        /**
         * @return string $city;
         */
        public function getCity() : string
        {
            return $this->city;
        }

        /**
         * @return string $province;
         */
        public function getProvince() : string
        {
            return $this->province;
        }

        /**
         * @return string $picture or null;
         */
        public function getPicture() : ?string
        {
            return $this->picture;
        }

        /**
         * @return string $notes or null
         */
        public function getNotes() : ?string
        {
            return $this->notes;
        }
    }