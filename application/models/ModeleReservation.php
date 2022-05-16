<?php
    class ModeleReservation extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getReservationClient($noclient, $nombreDeLignesARetourner, $noPremiereLigneARetourner)
    {
        $this->db->limit($nombreDeLignesARetourner, $noPremiereLigneARetourner);
        $this->db->select('noreservation, dateheure, a.nom AS pD, d.nom AS pA, dateheuredepart, montanttotal, paye');
        $this->db->from('reservation r, traversee t, liaison l, port as a, port as d');
        $this->db->where('r.notraversee = t.notraversee and l.noliaison = t.noliaison AND a.noport = l.noport_depart AND l.noport_arrivee = d.noport');
        $this->db->where('noclient', $noclient);
        $this->db->order_by('noreservation');
        $this->db->group_by('dateheure');

        $requete = $this->db->get();
        return $requete->result();  
    }

    public function nombreReservation($noclient)
    {
        
        $this->db->from('reservation'); 
        $this->db->where('noclient', $noclient);
        return $this->db->count_all("reservation");
        
    }
}
?>