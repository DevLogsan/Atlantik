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
        $this->load->view('templates/Header');
        $this->load->view('client/parametre');
    }

    public function modifierParametre()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');


    }
}
?>