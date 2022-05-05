<?php
    class ModeleSecteur extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function retournerSecteurs()
    {
        $query = $this->db->get('secteur');
        return $query->result();
    }
}
?>