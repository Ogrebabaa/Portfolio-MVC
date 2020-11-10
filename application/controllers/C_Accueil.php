<?php

class C_Accueil extends CI_Controller {

    public function index() {
        //VARIABLES
        $data['title'] = "Accueil";
        
        // navigation
        $this->load->model('M_Navigation');
        $nav = $this->get_nav();
        $data['nav'] = $nav;

        //load
        $this->load->model('M_Accueil');
        $this->load->view('header', $data);
        $this->load->view('Layout', $data);
        
        //data treatement
        $content = $this->get_content();
        $nom = $content[0]->nom;
        $data["nom"] = $nom;

        

        //export
        $this->load->view('V_Accueil', $data);
        $this->load->view('footer');
    }

    public function get_nav() {
        $nav = $this->M_Navigation->get_nav();
        return $nav;
    }

    public function get_content() {
        $content = $this->M_Accueil->get_content();
        return $content;
    }


    
}