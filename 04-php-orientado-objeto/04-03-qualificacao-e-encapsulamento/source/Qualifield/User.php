<?php

namespace Source\Qualifield;

class User {
    private $firstName;
    private $lastName;
    private $email;
    private $error;
    
    /**
     * Método responsável por válida os sets da classe
     * @param string $firstName
     * @param string $lastName
     * @param boolean $email
     */
    public function setUser($firstName, $lastName, $email){
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        
        if(!$this->setEmail($email)):
            $this->error = "O e-mail {$this->getEmail()} não é válido!";
            return false;
        endif;
        
        return true;
    }
    
    /*
     * Método responsável por pegar o atributo error
     */
    public function getError() {
        return $this->error;
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
    private function setFirstName($firstName) {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
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
    private function setLastName($lastName) {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
    }
    
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
    private function setEmail($email) {
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)):
            return true;
        else:
            return false;
        endif;
    }
    
}

