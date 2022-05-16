<?php
class Visiteur extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('assets');
        $this->load->library("pagination");
        $this->load->model('ModeleUtilisateur');
        $this->load->model('ModeleSecteur');
        $this->load->model('ModeleLiaison');
        $this->load->library('session');
        $this->session->statut = 0;
    }

    public function homepage()
    {
        $this->load->view('templates/Header');
        $this->load->view('templates/Footer');
    }

    public function login_up()
    {
        $DonneesInjectees['TitreDeLaPage'] = 'Login up';

        $this->form_validation->set_rules('txtMel', 'Mel', 'required');
        $this->form_validation->set_rules('txtMotDePasse', 'Mot de passe', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/Header');
            $this->load->view('visiteur/login_up', $DonneesInjectees);
            $this->load->view('templates/Footer');
        }
        else
        {
            $Mel = $this->input->post('txtMel');
            $MdP = $this->input->post('txtMotDePasse');
            $UtilisateurRetourner = $this->ModeleUtilisateur->retournerUtilisateur($Mel, $MdP);

            if (!($UtilisateurRetourner == null))
            {
                $this->session->nom = $UtilisateurRetourner->nom;
                $this->session->prenom = $UtilisateurRetourner->prenom;
                $this->session->adresse = $UtilisateurRetourner->adresse;
                $this->session->codepostal = $UtilisateurRetourner->codepostal;
                $this->session->ville = $UtilisateurRetourner->ville;
                $this->session->noclient = $UtilisateurRetourner->noclient;
                $this->session->UtilisateurConnecter = 1;
                
                redirect('/visiteur/homepage');
            }
            else
            {
                $this->load->view('templates/Header');
                $this->load->view('visiteur/login_up', $DonneesInjectees);
                $this->load->view('templates/Footer');
            }
        }
    }

    public function register()
    {
        $data['Titre'] = 'Register';

        $this->form_validation->set_rules('txtNom', 'Nom', 'required');
        $this->form_validation->set_rules('txtPrenom', 'Nom', 'required');
        $this->form_validation->set_rules('txtAdresse', 'Adresse', 'required');
        $this->form_validation->set_rules('txtCodePostal', 'Code postal', 'required');
        $this->form_validation->set_rules('txtVille', 'Ville', 'required');
        $this->form_validation->set_rules('txtTelFixe', 'Numéro de téléphone fixe', 'required');
        $this->form_validation->set_rules('txtTelMobile', 'Numéro de téléphone mobile', 'required');
        $this->form_validation->set_rules('txtMel', 'Mel', 'required');
        $this->form_validation->set_rules('txtMotDePasse', 'Mot de passe', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/Header');
            $this->load->view('visiteur/register', $data);
            $this->load->view('templates/Footer');
        }
        else
        {
            $dataAccountInsert = array(
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

            $UtilisateurCreer = $this->modeleUtilisateur-->insertUser($dataAccountInsert);
            redirect('/visiteur/login_up');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/visiteur/homepage');
    }

    public function list_bindings()
    {
        $data['lesLiaisonsParSecteurs'] = $this->ModeleLiaison->getLiaisonsParSecteur();
        
        $this->load->view('templates/Header');
        $this->load->view('visiteur/liste_liaison', $data);
    }

    public function link_price($noliaison)
    {
        $this->load->view('templates/Header');
        
        $data['lesColonnes'] = $this->ModeleLiaison->getTarifPourUneLiaison($noliaison);
        $data['lesLiaisons'] = $this->ModeleLiaison->getLiaisonsParNoLiaison($noliaison);

        
        $this->load->view('visiteur/tarif_liaison', $data);  
    }

    public function crossing_times($secteur = null)
    {
        $this->form_validation->set_rules('lstLiaison', 'Liaison', 'required');
        $this->form_validation->set_rules('txtDate', 'Date', 'required');

        $data['lesSecteurs'] = $this->ModeleSecteur->retournerSecteurs();
        $this->load->view('templates/Header');
        
        if ($this->form_validation->run() === FALSE)
        {
            if ($secteur === null) {
                $this->load->view('visiteur/liste_secteur', $data);
            }
            else
            {
                $this->load->view('visiteur/liste_secteur', $data);
                $di['unSecteur'] = $this->ModeleLiaison->getLiaisonsParSecteurID($secteur);
                $di['noSecteur'] = $secteur;

                $this->load->view('visiteur/option_liaison', $di);    
            }
        }
        else
        {
            $this->load->view('visiteur/liste_secteur', $data);

            $noliaison = $this->input->post('lstLiaison');
            $date = $this->input->post('txtDate');

            $data['date'] = $date;

            $data['laliaison'] = $this->ModeleLiaison->getLiaisonsParNoLiaison($noliaison);
            $data['lesinfo'] = $this->ModeleLiaison->getInfo($noliaison, $date);
            $this->load->view('visiteur/option_liaison');
            $this->load->view('visiteur/tableau_traversee', $data);
        }
    }
}
?>

<!--
    $data['LesTraverseesBateaux'] = $this->ModeleInsert->getLesTraverseesBateaux();
    $data['QuantiteEnregistree'] = $this->ModeleInsert->QuantiteEnregistree();
    $data['CapaciteMaximale'] = $this->ModeleInsert->getCapaciteMaximale();
    $data['LesCategories'] = $this->ModeleInsert->getLesCategories();
-->