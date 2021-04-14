<?php

class User {
    public $firstName;
    public $lastName;
    public $email;
    
    /**
     * Método responsável por pegar o atributo email
     * @return boolean
     */
    public function getEmail() {
        return $this->email;
    }
    
    /**
     * Método responsável por válidar email no formato válido!
     * @param string $email
     * @return boolean
     */
    public function setEmail($email) {
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)):
            return true;
        else:
            return false;
        endif;
    }
    
    /**
     * Método responsável por pegar o atributo lastName
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }
    
    /**
     * Método responsável por válidar e filtrar o LastName
     * @param string $lastName
     * @return string
     */
    public function setLastName($lastName) {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
    }
    
    /**
     * Método responsável por pegar o atributo FirstName
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }
    
    /**
     * Método responsável por válidar e filtrar o FirstName
     * @param string $firstName
     * @return string
     */
    public function setFirstName($firstName) {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
    }   
    
}
