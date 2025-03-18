<?php

class ZangeresModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Get all zangeres records sorted by age (descending)
     */
    public function getZangeressen()
    {
        $sql = "SELECT Id, Naam, Nettowaarde, Land, Mobiel, Leeftijd, IsActief, Opmerking, 
                       DatumAangemaakt, DatumGewijzigd 
                FROM Zangeres 
                ORDER BY Leeftijd DESC";
        
        $this->db->query($sql);
        
        return $this->db->resultSet();
    }
}
