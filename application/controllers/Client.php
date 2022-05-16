<?php
class Client extends CI_Controller {
    public function __construct()
   {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('assets');
        $this->load->library("pagination");
        $this->load->model('ModeleUtilisateur');
        $this->load->model('ModeleReservation');
        $this->load->model('ModeleTraversee');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        
        if ($this->session->UtilisateurConnecter == 0)
        {
            redirect('/visiteur/login_up');
        }
    }

    public function parametre()
    {
        $noclient = $this->session->noclient;
        
        $ParametresRetourner = $this->ModeleUtilisateur->retournerRemplissageParametre($noclient);

        $data = array(
            'nom' => $ParametresRetourner->nom,
            'prenom' => $ParametresRetourner->prenom,
            'adresse' => $ParametresRetourner->adresse,
            'codepostal' => $ParametresRetourner->codepostal,
            'ville' => $ParametresRetourner->ville,
            'telephonefixe' => $ParametresRetourner->telephonefixe,
            'telephonemobile' => $ParametresRetourner->telephonemobile,
            'mel' => $ParametresRetourner->mel,
            'motdepasse' => $ParametresRetourner->motdepasse
          );

        $this->form_validation->set_rules('txtNom', 'Nom', 'required');
        $this->form_validation->set_rules('txtPrenom', 'Nom', 'required');
        $this->form_validation->set_rules('txtAdresse', 'Adresse', 'required');
        $this->form_validation->set_rules('txtCodePostal', 'Code postal', 'required');
        $this->form_validation->set_rules('txtVille', 'Ville', 'required');
        $this->form_validation->set_rules('txtTelFixe', 'Numéro de téléphone fixe', 'required');
        $this->form_validation->set_rules('txtTelMobile', 'Numéro de téléphone mobile', 'required');
        $this->form_validation->set_rules('txtMel', 'Mel', 'required');
        $this->form_validation->set_rules('txtMotDePasse', 'Mot de passe', 'required');

        if ($this->form_validation->run() === FALSE) 
        {
            $this->load->view('templates/Header');
            $this->load->view('client/parametre', $data);
            $this->load->view('templates/Footer');
        }
        else
        {
            $donneesAInserer = array(
                'nom' => $this->input->post('txtNom'),
                'prenom' => $this->input->post('txtPrenom'),
                'adresse' => $this->input->post('txtAdresse'),
                'codepostal' => $this->input->post('txtCodePostal'),
                'ville' => $this->input->post('txtVille'),
                'telephonefixe' => $this->input->post('txtTelFixe'),
                'telephonemobile' => $this->input->post('txtTelMobile'),
                'mel' => $this->input->post('txtMel'),
                'motdepasse' => $this->input->post('txtMotDePasse'),
            );

        $this->ModeleUtilisateur->modificationDesParametres($noclient, $donneesAInserer);
        redirect('client/parametre', 'refresh');
        }
    }

    public function reservation($notraversee, $date)
    {
        $noclient = $this->session->noclient;

        $this->form_validation->set_rules('txtNom', 'Nom', 'required');

        $data['laliaison'] = $this->ModeleTraversee->reservation($notraversee);
        $data['LesColonnes'] = $this->ModeleTraversee->tableauReservation($notraversee);

        if ($this->form_validation->run() === FALSE) 
        {
            $this->load->view('templates/Header');
            $this->load->view('client/reservation', $data);
        }
        else
        {
            //$nombreType = count($this->ModeleTraversee->getType()) - 1;

            $options = array();
            foreach($this->input->post() as $key => $val)  
            {
                if ($this->input->post($key) != 0)
                { 
                    $options[] = $this->input->post($key);
                }
            }
            return $options;

            $data = array(
                'notraversee' => $notraversee,
                'noclient' => $noclient,
                'dateheure' => date('Y-m-d H:i:s'),
                'montanttotal' => $montantTotal,
            );
        }
    }

    public function old_reservation()
    {
        $noclient = $this->session->noclient;

        $config = array();
        $config["base_url"] = site_url('client/old_reservation');
        $config["total_rows"] = $this->ModeleReservation->nombreReservation($noclient);
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;

        $config['first_link'] = 'Premier';
        $config['last_link'] = 'Dernier';
        $config['next_link'] = 'Suivant';
        $config['prev_link'] = 'Précédent';

        $this->pagination->initialize($config);

        $noPage = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["lesReservations"] = $this->ModeleReservation->getReservationClient($noclient, $config["per_page"], $noPage);
        $data["liensPagination"] = $this->pagination->create_links();

        $this->load->view('templates/Header');
        $this->load->view('client/old_reservation', $data);
    }
}
?>