<?php

class Secretaire{

    private $_nom;
    private $_prenom;
    private $_email; 
    private $_password;
    private $_service;
    private $_id;
    private $_id_role=('2');


    public function getemail(){
        return $this->_email;
        
}
public function setemail($email) {
    return $this->$_email;
}


public function getpassword(){
    return $this->_password;
}
public function setpassword($password) {
    return $this->$_password;
}

public function getnom(){
    return $this->_nom;
}
public function setnom($nom) {
    return $this->$_nom;
}


public function getprenom(){
    return $this->_prenom;

}
public function setprenom($prenom) {
    return $this->$_prenom;
}

public function getservice(){
    return $this->_service;

}
public function setservice($service) {
    return $this->$_service;
}

public function getid(){
    return $this->_id;

}
public function setid($id) {
    return $this->$_id;
}

public function getid_role(){
    return $this->_id_role;

}
public function setid_role($id_role) {
    return $this->$_id_role;
}
}
?>