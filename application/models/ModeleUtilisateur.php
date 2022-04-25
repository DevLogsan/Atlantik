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

    public function retournerRemplissageParametre($NoClient)
    {
        $requete = $this->db->get_where('client', array('noclient' => $NoClient));
        return $requete->row();
    }

    public function modificationDesParametres($NoClient, $donneesAInserer)
    {
        $this->db->set($donneesAInserer);
        $this->db->where('noclient', $NoClient);
        $this->db->update('client');
    }
}