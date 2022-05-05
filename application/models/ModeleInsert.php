<?php
    class ModeleInsert extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function insertUser($data)
    {
        $this->db->insert('client', $data);
    }

//public function quantiteEnregistree($noTraversee, $lettreCategorie)
//public function getLesTraverseesBateaux($noLiaison, $dateTraversee)
//public function getCapaciteMaximale($noTraversee, $lettreCategorie)
//public function getLesTraverseesBateaux($noLiaison, $dateTraversee)
}
?>