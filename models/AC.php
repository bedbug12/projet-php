<?php
class AC extends User{
    //Attributs d'instance
    private string $email;

    //Methodes
    public function __construct(){
        //On appelle le constructeur qui permet d'instancier 
    }

    //setters ou mutateurs
//setters de email
public function setEmail(string $email):void{
    $this->email=$email;
}

//les getters permettent d'obtenir la valeur d'un att privée ou proteted
//getter email
public function getEmail():string{
    return $this->email;
}

}