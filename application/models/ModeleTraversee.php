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
}
?>