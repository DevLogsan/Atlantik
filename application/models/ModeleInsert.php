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

    public function getLiaisonsParSecteur()
    {
            $this->db->select('s.nom, noliaison AS noliaison, distance, a.nom AS pD, d.nom AS pA');
            $this->db->from('secteur as s, liaison as l, port as a, port as d');
            $this->db->where('a.noport = l.noport_depart AND l.noport_arrivee = d.noport AND s.nosecteur = l.nosecteur');
            $this->db->order_by('nom', 'ASC');

            $requete = $this->db->get();
            return $requete->result();
    }
}