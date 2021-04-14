<?php

namespace Source\Inheritance;

class Address {
    private $street;
    private $number;
    private $complement;
    
    /**
     * Método construtor
     * @param string $street
     * @param integer $number
     * @param string $complement
     */
    public function __construct($street, $number, $complement = null) {
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
    }
    
    /**
     * 
     * @return string
     */
    public function getStreet() {
        return $this->street;
    }
    
    /**
     * 
     * @return integer
     */
    public function getNumber() {
        return $this->number;
    }
    
    /**
     * 
     * @return string
     */
    public function getComplement() {
        return $this->complement;
    }
}
