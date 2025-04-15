<?php
class Profesionel {

    public function __construct(ContainerDI $c){
        $this->c = $c;
    }

    // Fonction pour récupérer tous les lycées avec la class conn
    public function getExperience()
    {
        //ss('getCompetence');
        $mysqli = $this->c->get('Conn')->connect();
        //ss('$mysqli');
        $query = "SELECT * FROM experience ORDER BY id DESC";
        //ss('$query', $query);
        $result = $mysqli->query($query);
        // ss('result');
        $composants = $result->fetch_all(MYSQLI_ASSOC);
        // ss('$composants');
        $this->c->get('App')->apiResult->send($composants, true);
        // ss('send');
    }

}
