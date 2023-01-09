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

    /**
     * @return string
     */
    public function getFullName() : string;

    /**
     * @return string
     */
    public function getDateOfBirth()  : string;

    /**
     * @return string
     */
    public function getAddress()      : string;

    /**
     * @return string
     */
    public function getEmail()        : string;

    /**
     * @return string or null
     */
    public function getPhone()        :? string;

    /**
     * @return string
     */
    public function getCity()         : string;
    /**
     * @return string
     */
    public function getProvince()     : string;

    /**
     * @return string or null
     */
    public function getPicture()      :? string;

    /**
     * @return string or null
     */
    public function getNotes()        :? string;

}