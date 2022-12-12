<?php
class UserSession{
    
    public function __construct(){
        session_start();
    }
    
    public function setCurrentUser($nombre){
        $_SESSION['nombre'] = $nombre;
       // $_SESSION['password'] = $tipo;
    }

    public function setCurrentID($id){
        $_SESSION['id_nombre'] = $id;
       // $_SESSION['password'] = $tipo;
    }

    public function setCurrentqueja($n_queja){
        $_SESSION['queja'] = $n_queja;
    }

    public function getCurrentUser(){
        //return array ($_SESSION['nombre'], $_SESSION['tipo']);
        return $_SESSION['nombre'];
    }

    public function getCurrentID(){
        //return array ($_SESSION['nombre'], $_SESSION['tipo']);
        return $_SESSION['id_nombre'];
    }

    public function getCurrentqueja(){
        return $_SESSION['queja'];
    }
    
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>