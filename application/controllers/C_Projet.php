<?php

class C_Projet extends CI_Controller {

    // $this->load->model('M_Projet');
    public function index() {
        //load
        $this->load->model('M_Projet');
        $this->load->view('Layout');
        
        //data treatement
        $projects = $this->get_projects();
        // print_r($projects);
        $nb_projects = sizeof($projects);


        $data["projects"] = $projects;
        $data["nb_projects"] = $nb_projects;
        //export
        $this->load->view('V_Project', $data);
        
    }




    public function get_projects() {
        $projects = $this->M_Projet->get_all_project();
        $res = array();
        for ($i = 0; $i < sizeof($projects); $i++) {
            $index = $i +1;
            $res["Project$index"] = $projects[$i];
        }
        
        return $res;
    }

    public function get_project_by_id($id) {
        $project = $this->M_Projet->get_project_by_id($id);
        return $project;
    }

    public function add_project($nom, $lien, $description) {
        if (!empty($nom) && !empty($description) && !empty($lien)) {
            $this->M_Projet->add_project($nom, $description, $lien);
        }
        
    }

    function toto() {
        echo "<h1>Toto</h1>";
    }


}


?>