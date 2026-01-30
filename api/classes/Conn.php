<?php
class Conn {
    public function __construct(ContainerDI $c){
        $this->c = $c;
        //ss('Conn');
    }

    public function connect()
    {
        try { 
            $mysqli = new mysqli("mysql-sckertch.alwaysdata.net", "sckertch", 'cTL.M85sJ4t6:GS', "sckertch_port", 3306);
            return $mysqli;
        }
        catch (Exception $e) {
            $this->c->get('App')->apiResult->send($e->getMessage(), false);
        }
    }
}