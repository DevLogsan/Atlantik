<?php
    class ModeleLiaison extends CI_Model {

    public function __construct()
    {
        $this->load->database();
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

    public function getLiaisonsParSecteurID($data)
    {
        $this->db->select('a.nom AS pD, d.nom AS pA, noliaison');
        $this->db->from('liaison as l, port as a, port as d');
        $this->db->where('a.noport = l.noport_depart AND l.noport_arrivee = d.noport');
        $this->db->where('nosecteur', $data);

        $requete = $this->db->get();
        return $requete->result();
    }

    public function getInfo($noliaison, $date)
    {
        $this->db->select('a.nom AS pD, d.nom AS pA, t.notraversee, dateheuredepart, b.nom AS nombateau');
        $this->db->from('liaison as l, port as a, port as d, traversee as t, bateau as b');
        $this->db->where('a.noport = l.noport_depart AND l.noport_arrivee = d.noport AND t.noliaison = l.noliaison AND t.nobateau = b.nobateau');
        $this->db->where('l.noliaison', $noliaison);
        $this->db->like('dateheuredepart', $date);

        $requete = $this->db->get();
        return $requete->result();
    }

    public function getLiaisonsParNoLiaison($noliaison)
    {
        $this->db->select('a.nom AS pD, d.nom AS pA, l.noliaison');
        $this->db->from('liaison as l, port as a, port as d');
        $this->db->where('a.noport = l.noport_depart AND l.noport_arrivee = d.noport');
        $this->db->where('l.noliaison', $noliaison);

        $requete = $this->db->get();
        return $requete->result();
    }

    public function getTarifPourUneLiaison($noliaison)
    {
        $this->db->select('li.noliaison, ty.lettrecategorie, c.libelle, c.lettrecategorie, ty.notype, ty.libelle, datedebut, datefin');
        $this->db->distinct();
        $this->db->from('type as ty, categorie as c, liaison as li, traversee as tr, periode as p, tarifer as ta');
        $this->db->where('ty.lettrecategorie = c.lettrecategorie and li.noliaison = tr.noliaison and ta.noperiode = p.noperiode and ta.noliaison = li.noliaison and datedebut <= datefin');
        $this->db->where('li.noliaison', $noliaison);
        $this->db->order_by('c.lettrecategorie ASC');
    }
}
?>  