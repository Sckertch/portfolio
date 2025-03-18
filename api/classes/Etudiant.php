<?php

class Etudiant
{
    public function __construct(ContainerDI $c){
        $this->c = $c;
    }

    public function getAllStudent()
    {
        $mysqli = new mysqli("localhost", "root", "", "formation");
        $request = "SELECT * FROM etudiant";
        $stmt = $mysqli->prepare($request);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $this->c->get('App')->apiResult->send($data, true);
    }

    // Autres fonctions
}