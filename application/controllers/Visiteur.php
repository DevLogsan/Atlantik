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
            $this->load->view('templates/Header');
            $this->load->view('visiteur/seConnecter', $DonneesInjectees);
            $this->load->view('templates/Footer');
        }
        else
        {
            $Mel = $this->input->post('txtMel');
            $MdP = $this->input->post('txtMotDePasse');
            $UtilisateurRetourner = $this->ModeleUtilisateur->retournerUtilisateur($Mel, $MdP);

        if (!($UtilisateurRetourner == null)) 
        {
            $this->session->Mel = $UtilisateurRetourner->mel;

            $DonneesInjectees['Mel'] = $Mel; 
            $this->load->view('templates/Header');
            $this->load->view('visiteur/accueil', $DonneesInjectees);
            $this->load->view('templates/Footer');
        }
        else
        {
            $this->load->view('templates/Header');
            $this->load->view('visiteur/seConnecter', $DonneesInjectees);
            $this->load->view('templates/Footer');
        }
        }
    }
}
?>