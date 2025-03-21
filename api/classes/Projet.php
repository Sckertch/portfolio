<?php
Class Projet {
    public function __construct(ContainerDI $c){
        // ss('Competence');
        $this->c = $c;
    }

    public function getprojet()
    {
        // ss('getCompetence');
        $mysqli = $this->c->get('Conn')->connect();
        //ss('$mysqli');
        //$query = "SELECT * FROM projet";
        $query = "SELECT 
    p.id AS Projet_ID,
    p.*,
    GROUP_CONCAT(l.name SEPARATOR ', ') AS Languages
FROM 
    projet p
JOIN 
    Projet_Language pl ON p.id = pl.projet_id
JOIN 
    Language l ON pl.language_id = l.id
GROUP BY 
    p.id, p.nom;";
        
        //ss('$query', $query);
        $result = $mysqli->query($query);
        // ss('result');
        $composants = $result->fetch_all(MYSQLI_ASSOC);
        // ss('$composants');
        $this->c->get('App')->apiResult->send($composants, true);
        // ss('send');
    }
}