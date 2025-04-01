<?php

class CyberaanvalModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Get all cyberaanval records sorted by Schade (descending)
     */
    public function getCyberaanvallen()
    {
        $sql = "SELECT Id, Naam, Jaar, AantalSlachtoffers, TypeAanval, 
                       Schade, IsActief, Opmerking, DatumAangemaakt, DatumGewijzigd
                FROM Cyberaanval 
                ORDER BY Schade DESC";
        
        $this->db->query($sql);
        
        return $this->db->resultSet();
    }
}
