<?php

class Secretaire{

    private $_nom;
    private $_prenom;
    private $_email; 
    private $_password;
    private $_service;
    private $_id;
    private $_id_role=('2');


public function hydratation(array $infos){
    foreach ($infos as $key=>$value){
        $method='set'.($key);
        if(method_exists($this,$method)){
            $this->$method($value);
        }
    }

}

    public function getemail(){
        return $this->_email;
        
}
public function setemail($email) {
    $this->_email=$email;
}


public function getpassword(){
    return $this->_password;
}
public function setpassword($password) {
    $this->_password=$password;
}

public function getnom(){
    return $this->_nom;
}
public function setnom($nom) {
    $this->_nom=$nom;
}


public function getprenom(){
    return $this->_prenom;
}
public function setprenom($prenom) {
    $this->_prenom=$prenom;
}


public function getservice(){
    return $this->_service;
}
public function setservice($service) {
    $this->_service=$service;
}


public function getid(){
    return $this->_id;
}
public function setid($id) {
    $this->_id=$id;
}

public function getid_role(){
    return $this->_id_role;

}
public function setid_role($id_role) {
    $this->_id_role=$id_role;
}
}
?>