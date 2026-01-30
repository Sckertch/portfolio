<?php
class Outil {
    public function __construct(ContainerDI $c){
        $this->c = $c;
    }

    public function getOutils() {       

        try{
            // Requête pour récupérer tous les outils
            $mysqli = $this->c->get('Conn')->connect();
            $query = "SELECT * 
                    FROM  outils 
                    ORDER BY id ASC";
            
            // Préparer la requête
            $stmt = $mysqli->query($query);
            $outils = $stmt->fetch_all(MYSQLI_ASSOC);
            $this->c->get('App')->apiResult->send($outils, true);
        }catch (Exception $e) {
            $this->c->get('App')->apiResult->send($e->getMessage(), false);
        }
    }
}
