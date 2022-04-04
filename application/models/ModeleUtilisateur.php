<?php
    class ModeleUtilisateur extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function retournerUtilisateur($Mel, $MotdePasse)
    {
        $requete = $this->db->get_where('client',array('mel' => $Mel, 'motdepasse'=>$MotdePasse));
        return $requete->row();
    }
}