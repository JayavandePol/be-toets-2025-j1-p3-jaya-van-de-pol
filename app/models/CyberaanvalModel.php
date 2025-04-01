<?php

class CyberaanvalModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCyberaanvallen()
    {
        $sql = "SELECT Id, Naam, Jaar, AantalSlachtoffers, TypeAanval, 
                       Schade, IsActief, Opmerking, DatumAangemaakt, DatumGewijzigd
                FROM Cyberaanval 
                ORDER BY AantalSlachtoffers DESC";
        
        $this->db->query($sql);
        
        return $this->db->resultSet();
    }
}
