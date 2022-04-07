<?php
class Client extends CI_Controller {
    public function __construct()
   {
        parent::__construct();
        //$this->load->model('');
        $this->load->helper('assets');
        $this->load->library("pagination");
        
        if ($this->session->statut == 0)
        {
            $this->load->helper('url');
            redirect('/visiteur/seConnecter');
        }
    }

    public function parametre()
    {
        $this->load->view('templates/Header');
        $this->load->view('client/parametre');
    }
}
?>