<?php
Class Competence {
    public function __construct(ContainerDI $c){
        // ss('Competence');
        $this->c = $c;
    }

    public function getCompetence()
    {
        // ss('getCompetence');
        $mysqli = $this->c->get('Conn')->connect();
        //ss('$mysqli');
        $query = "SELECT * FROM competence";
        //ss('$query', $query);
        $result = $mysqli->query($query);
        // ss('result');
        $composants = $result->fetch_all(MYSQLI_ASSOC);
        // ss('$composants');
        $this->c->get('App')->apiResult->send($composants, true);
        // ss('send');
    }
}