<?php
class Client extends CI_Controller {
    public function __construct()
   {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('assets');
        $this->load->library("pagination");
        $this->load->model('ModeleUtilisateur');
        $this->load->library('session');
        $this->load->library('form_validation');
        
        if ($this->session->UtilisateurConnecter == 0)
        {
            redirect('/visiteur/seConnecter');
        }
    }

    public function parametre()
    {
        $noclient = $this->session->noclient;
        
        
        $ParametresRetourner = $this->ModeleUtilisateur->retournerRemplissageParametre($noclient);
        
        $this->load->view('templates/Header');
        $this->load->helper('form');

        $this->load->view('client/parametre');
        $this->load->view('templates/Footer');
    }
}
?>

<!-- $data['nom'] = array(
            'nom'  => 'txtNom',
            'value' => $this->session->nom,
            'class' => 'form-control'
          );
-->