<?php
class Visiteur extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('assets');
        $this->load->library("pagination");
        $this->load->model('ModeleUtilisateur');
        $this->load->library('session');
        $this->session->statut = 0;
    }

    public function accueil()
    {
        $this->load->view('templates/Header');
        $this->load->view('visiteur/accueil');
        $this->load->view('templates/Footer');
    }

    public function seConnecter()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $DonneesInjectees['TitreDeLaPage'] = 'Se connecter';

        $this->form_validation->set_rules('txtMel', 'Mel', 'required');
        $this->form_validation->set_rules('txtMotDePasse', 'Mot de passe', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('visiteur/seConnecter', $DonneesInjectees);
            $this->load->view('templates/Footer');
        }
        else
        {
            $Mel = $this->input->post('txtMel');
            $MdP = $this->input->post('txtMotDePasse');
            $UtilisateurRetourner = $this->ModeleUtilisateur->retournerUtilisateur($Mel, $MdP);
            $UtilisateurInformation = $this->ModeleUtilisateur->retournerInformationUtilisateur();

            if (!($UtilisateurRetourner == null)) 
            {
                $this->session->nom = $UtilisateurInformation->nom;
                $this->session->prenom = $UtilisateurInformation->prenom;

                $this->session->UtilisateurConnecter = 1;
                
                redirect('/visiteur/accueil');
                //$this->load->view('visiteur/ConnectionReussite', $DonneesInjectees);
                //$this->load->view('templates/Footer');
            }
            else
            {
                $this->load->view('visiteur/seConnecter', $DonneesInjectees);
                $this->load->view('templates/Footer');
            }
        }
    }

    public function seDeConnecter()
    {
        $this->session->sess_destroy();
        redirect('/visiteur/accueil');
    }
}
?>