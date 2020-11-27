<?php

class C_Veille extends CI_Controller {

    public function index() {
        //VARIABLES
        $data['title'] = "Veille technologique";
        
        // navigation
        $this->load->model('M_Navigation');
        $nav = $this->get_nav();
        $data['nav'] = $nav;

        //load
        $this->load->model('M_Article');
        $this->load->view('header', $data);
        $this->load->view('Layout', $data);
        
        //data treatement
        $articles = $this->recup_articles();
        $data['articles'] = $articles;

        

        //export
        $this->load->view('V_Veille', $data);
        $this->load->view('footer');
    }

    public function get_nav() {
        $nav = $this->M_Navigation->get_nav();
        return $nav;
    }

    public function recup_articles() {
        $articles = $this->M_Article->get_articles();
        return $articles;
    }


    
}