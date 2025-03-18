<?php
class Lycee {

    public function __construct(ContainerDI $c){
        $this->c = $c;
    }

    // Fonction pour récupérer tous les lycées avec la class conn
    public function getAllLycee()
    {
        $conn = $this->c->get('Conn')->connect();
        $request = '
                SELECT coordonnees.id, lycee.nom AS nom_lycee, type_lycee.type AS type_lycee, coordonnees.adresse, coordonnees.latitude, coordonnees.longitude
                FROM coordonnees
                INNER JOIN lycee ON coordonnees.lycee_id = lycee.id
                INNER JOIN type_lycee ON lycee.type_id = type_lycee.id
                WHERE coordonnees.latitude IS NOT NULL AND coordonnees.longitude IS NOT NULL
            ';
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $this->c->get('App')->apiResult->send($data, true);
    }

    // Fonction pour rechercher des lycées par mot-clé
    public function searchLycee($keyword)
    {
        $conn = $this->c->get('Conn')->connect();
        $query = "SELECT l.*, t.*, c.* FROM lycee l JOIN type_lycee t ON l.type_id = t.id JOIN coordonnees c ON l.id = c.lycee_id WHERE nom LIKE ? OR ville LIKE ? OR type LIKE ?";
        
        $stmt = $conn->prepare($query);
        $searchTerm = '%' . $keyword . '%';
        $stmt->bind_param('sss', $searchTerm, $searchTerm, $searchTerm);
        
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $this->c->get('App')->apiResult->send($data, true);
    }
    public function getFilteredLycee($criteria)
    {
        $conn = $this->c->get('Conn')->connect();
        $query = "SELECT * FROM lycee WHERE 1=1";
        
        // Ajout des critères de filtrage
        foreach ($criteria as $key => $value) {
            $query .= " AND " . $key . " = ?";
        }

        $stmt = $conn->prepare($query);
        
        // Liaison des valeurs des critères
        $types = str_repeat('s', count($criteria)); // suppose que tous les critères sont des chaînes
        $stmt->bind_param($types, ...array_values($criteria));
        
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $this->c->get('App')->apiResult->send($data, true);
    }

}
