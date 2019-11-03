<?php
class Session{
    private function __construct(){}

    static function init(){
        //inicia sesion, si existe lo reinicia
        if(!isset($_SESSION)){
            session_start();
        }
        else{
            session_destroy();
            session_start();
        }
    }

    static function add($key,$value){
        //agrega un valor a mi sesion clave
        $_SESSION[$key]=$value;
    }

    static function getAll(){
        return $_SESSION;
    }

    public function get($key){
		return (isset($_SESSION[$key])) ? $_SESSION[$key] : null;
	}

    static function remove($key){
        if(!empty($_SESSION[$key])){
            unset($_SESSION[$key]);
        }
    }

    static function close(){
        session_unset();
        session_destroy();
    }

    static function getStatus(){
        return session_status();
    }
}