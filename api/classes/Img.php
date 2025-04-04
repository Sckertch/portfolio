<?php

class Img {
    public function __construct($c){
        $this->c = $c;
    }

    public function getNaturalImg(){
        //ss('getCompetence');
        $mysqli = $this->c->get('Conn')->connect();
        //ss('$mysqli');
        $query = "SELECT * FROM imageNature";
        //ss('$query', $query);
        $result = $mysqli->query($query);
        // ss('result');
        $composants = $result->fetch_all(MYSQLI_ASSOC);
        // ss('$composants');
        $this->c->get('App')->apiResult->send($composants, true);
        // ss('send');
    }
}