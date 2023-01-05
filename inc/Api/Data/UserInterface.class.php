<?php

namespace inc\Api\Data;

/**
 * User interface
 */
interface UserInterface {

    /**
     * @return string
     */
    public function getId()           : string;
    
    /**
     * @return string
     */
    public function getFirstName()    : string;

    /**
     * @return string
     */
    public function getLastName()     : string;

    /**
     * @return int
     */
    public function getUserCategory() : int;

    /**
     * @return string
     */
    public function getUsername()     : string;
    
    /**
     * @return string
     */
    public function getPassword()     : string;

    /**
     * @param string $id
     */
    public function setId(string $id) : void;

    // public function getFullName()     : string;
    // public function getDateOfBirth()  : string;
    // public function getAddress()      : string;
    // public function getEmail()        : string;
    // public function getPhone()        :? string;
    // public function getCity()         : string;
    // public function getProvince()     : string;
    // public function getPicture()      :? string;
    // public function getNotes()        :? string;

}