<?php

namespace Source\Inheritance\Event;

class Event {
    private $event;
    private $date;
    private $price;
    
    private $register;
    protected $vacancies;
    
    /**
     * Event constructor
     * @param type $event
     * @param \DateTime $date
     * @param type $price
     * @param type $vacancies
     */
    public function __construct($event, \DateTime $date, $price, $vacancies) {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }
    
    /**
     * Método responsável por registrar o usuário a vaga
     * @param string $fullname
     * @param string $email
     */
    public function register($fullName, $email) {
        if($this->vacancies >= 1):
            $this->vacancies -= 1;
            $this->setRegister($fullName, $email);
            echo "<p class='trigger accept'>Parabéns {$fullName}, vaga garantida!</p>";
        else:
            echo "<p class='trigger error'>Desculpe {$fullName}, mas as vagas esgotaram!</p>";
        endif;
    }
    
    /**
     * Método responsável por registrar o usuário
     * @param type $register
     */
    protected function setRegister($fullName, $email): void {
        $this->register = [
            "name" => $fullName,
            "email" => $email
        ];
    }
    
    /**
     * 
     * @return type
     */
    public function getEvent() {
        return $this->event;
    }
    
    /**
     * 
     * @return \DateTime
     */
    public function getDate(): \DateTime {
        return $this->date->format('d/m/Y H:i');
    }
    
    /**
     * 
     * @return type
     */
    public function getPrice() {
        return number_format($this->price, "2", ",", ".");
    }
    
    /**
     * 
     * @return type
     */
    public function getRegister() {
        return $this->register;
    }
    
    /**
     * 
     * @return type
     */
    public function getVacancies() {
        return $this->vacancies;
    }
}
