<?php
    class ModeleTraversee extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function reservation($notraversee)
    {
        $this->db->select('a.nom AS pD, d.nom AS pA, notraversee, dateheuredepart');
        $this->db->from('liaison as l, port as a, port as d, traversee as t');
        $this->db->where('notraversee', $notraversee);
        $this->db->where('a.noport = l.noport_depart AND l.noport_arrivee = d.noport AND notraversee = 1 AND t.noliaison = l.noliaison');

        $requete = $this->db->get();
        return $requete->result();
    }

    public function tableauReservation($notraversee)
    {
        $this->db->select('ta.tarif as tarif, t.libelle as libelle, t.lettrecategorie as lettrecategorie, t.notype as notype');
        $this->db->from('type as t, tarifer as ta, periode as p , traversee as tr');
        $this->db->where('t.lettrecategorie = ta.lettrecategorie AND t.notype = ta.notype AND p.noperiode = ta.noperiode AND p.datedebut <= DATE(tr.dateheuredepart) AND p.datefin >= DATE(tr.dateheurearrivee) AND tr.noliaison = ta.noliaison');
        $this->db->where('tr.notraversee', $notraversee);
        $this->db->group_by('ta.tarif');

        $requete = $this->db->get();
        return $requete->result();
    }

    public function validerReservation($data)
    {
        $this->db->insert('reservation', $data);
    }

    public function getType()
    {
        $requete = $this->db->get('type');
        return $requete->result();
    }
}
?>