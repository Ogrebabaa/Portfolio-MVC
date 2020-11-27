<?php

class C_Projet extends CI_Controller {

    // $this->load->model('M_Projet');
    public function index() {
        //VARIABLES
        $data['title'] = "Mes projets";

        // navigation
        $this->load->model('M_Navigation');
        $nav = $this->get_nav();
        $data['nav'] = $nav;

        //load
        $this->load->model('M_Projet');
        $this->load->view('header', $data);
        $this->load->view('Layout');
        
        //data treatement
        $projects = $this->get_projects();
        // print_r($projects);
        $nb_projects = sizeof($projects);


        $data["projects"] = $projects;
        $data["nb_projects"] = $nb_projects;
        //export
        $this->load->view('V_Project', $data);
        $this->load->view('footer');
    }

    //navigation
    public function get_nav() {
        $nav = $this->M_Navigation->get_nav();
        return $nav;
    }


    //recupere tout les projets
    public function get_projects() {
        $projects = $this->M_Projet->get_all_project();
        $res = array();
        for ($i = 0; $i < sizeof($projects); $i++) {
            $index = $i +1;
            $res["Project$index"] = $projects[$i];
        }
        
        return $res;
    }

    //recupere un projet par le biais de son id
    public function get_project_by_id($id) {
        $project = $this->M_Projet->get_project_by_id($id);
        return $project;
    }

    //ajoute un projet a la bdd, acces a la fonction via formulaire
    public function add_a_project() {
        $this->load->model('M_Projet');

        //test si les données ont été renseigné
        if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['lien'])) {
            if (!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_POST['lien'])) {

                $nom = $this->input->post('nom');
                $description = $this->input->post('description');
                $lien = $this->input->post('lien');

                $this->M_Projet->add_project($nom, $description, $lien);

                $base_url = base_url();
                header("location: $base_url/C_Projet");
            } else {
                return "Veuillez remplir les champs.";
            }
        }
        
     
        
    }
    
    //supprime un projet de la bdd, acces a la fonction via formulaire
    public function remove_a_project() {
        $this->load->model('M_Projet');

        //recuperation via la methode post
        $id = $this->input->post('id');

        //test si le parametre est vide
        if ($id != "") {
            $this->M_Projet->rm_project($id);
        } 
        
        //retour sur la page principale
        $base_url = base_url();
        header("location: $base_url");

    }

    /**
     * SETTERS
     */

     //change le nom du projet
    public function change_name() {
        $this->load->model('M_Projet');

        if (isset($_POST['id']) && isset($_POST['new_name'])) {
            if (!empty($_POST['id']) && empty($_POST['new_name'])){
                $id = $this->input->post('id');
                $nom = $this->input->post('new_name');
                
                $this->M_Projet->set_name($id, $nom);

                
            } else {
                return "Veuillez renseigner un nom.";
            }
        }

        $base_url = base_url();
        header("location: $base_url/C_Projet");

    }

    //change la description du prjet
    public function change_description() {
        $this->load->model('M_Projet');

        if (isset($_POST['id']) && isset($_POST['new_description'])) {
            if (!empty($_POST['id']) && isset($_POST['new_description'])){
                $id = $this->input->post('id');
                $description = $this->input->post('new_description');
                
                $this->M_Projet->set_description($id, $description);

                
            } else {
                return "Veuillez renseigner une description.";
            }
        }

        $base_url = base_url();
        header("location: $base_url/C_Projet");

    }

    //change le lien du projet
    public function change_lien() {
        $this->load->model('M_Projet');

        if (isset($_POST['id']) && isset($_POST['new_lien'])) {
            if (!empty($_POST['id']) && isset($_POST['new_lien'])){
                $id = $this->input->post('id');
                $lien = $this->input->post('new_lien');
                
                $this->M_Projet->set_lien($id, $lien);

                $base_url = base_url();
                header("location: $base_url");
            } else {
                return "Veuillez renseigner un lien.";
            }
        }

        $base_url = base_url();
        header("location: $base_url/C_Projet");

    }

    /**
     * GETTERS
     */

     //recupere le lien d'un projet
    public function recup_lien($id) {
        $this->load->model('M_Projet');

        if (isset($_POST['id'])) {
            if (!empty($_POST['id'])){
                $id = $this->input->post('id');

                $lien = $this->M_Projet->get_lien($id);

                $base_url = base_url();
                header("location: $base_url/C_Projet");
            } else {
                $lien = "Selectionnez un projet.";
            }
        }

        return $lien;

    }

    //recupere le nom d'un projet
    public function recup_nom($id) {
        $this->load->model('M_Projet');

        if (isset($_POST['id'])) {
            if (!empty($_POST['id'])){
                $id = $this->input->post('id');

                $nom = $this->M_Projet->get_nom($id);
                
                $base_url = base_url();
                header("location: $base_url/C_Projet");
            } else {
                $nom = "Selectionnez un projet.";
            }
        }

        return $nom;

    }

    //recupere la description d'un projet
    public function recup_description($id) {
        $this->load->model('M_Projet');

        if (isset($_POST['id'])) {
            if (!empty($_POST['id'])){
                $id = $this->input->post('id');

                $description = $this->M_Projet->get_description($id);
                
                $base_url = base_url();
                header("location: $base_url/C_Projet");
            } else {
                $description = "Selectionnez un projet.";
            }
        }

        return $description;

    }


}


?>