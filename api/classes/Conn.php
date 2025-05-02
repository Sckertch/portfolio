<?php
class Conn {
    public function __construct(ContainerDI $c){
        $this->c = $c;
        //ss('Conn');
    }

    public function connect()
    {
        try { 
            $mysqli = new mysqli("45.45.219.189", "portfolio", 'E]ws.6mCvY_bH(86', "portfolio", 3306);
            return $mysqli;
        }
        catch (Exception $e) {
            $this->c->get('App')->apiResult->send($e->getMessage(), false);
        }
    }
}