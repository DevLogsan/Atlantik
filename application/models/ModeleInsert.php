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

    public function retournerSecteurs()
    {
        $query = $this->db->get('secteur');
        return $query->result();
    }

    public function getLiaisonsParSecteurID($data)
    {
        $this->db->select('a.nom AS pD, d.nom AS pA, noliaison');
        $this->db->from('liaison as l, port as a, port as d');
        $this->db->where('a.noport = l.noport_depart AND l.noport_arrivee = d.noport');
        $this->db->where('nosecteur', $data);

        $requete = $this->db->get();
        return $requete->result();
    }

    public function getInfo($data, $date)
    {
        $this->db->select('a.nom AS pD, d.nom AS pA, t.notraversee, dateheuredepart, b.nom AS nombateau');
        $this->db->from('liaison as l, port as a, port as d, traversee as t, bateau as b');
        $this->db->where('a.noport = l.noport_depart AND l.noport_arrivee = d.noport AND t.noliaison = l.noliaison AND t.nobateau = b.nobateau');
        $this->db->where('nosecteur', $data);
        $this->db->like('dateheuredepart', $date, 'after');

        $requete = $this->db->get();
        return $requete->result();
    }

//public function quantiteEnregistree($noTraversee, $lettreCategorie)
//public function getLesTraverseesBateaux($noLiaison, $dateTraversee)
//public function getCapaciteMaximale($noTraversee, $lettreCategorie)
//public function getLesTraverseesBateaux($noLiaison, $dateTraversee)

}