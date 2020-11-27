<?php

Class C_Apropos extends CI_Controller{
    
    
    public function index(){
        
            $this->load->model('M_Competences');
            $this->load->model('M_Formation');
            $this->load->model('M_Exp');
            
            $this->load->view('Layout');
        
          //data treatement
        $Competences = $this->get_Competences();
        //print_r($Competences);
        $nb_Competences = sizeof($Competences);
            
       $data["Competences"] = $Competences;
       $data["nb_Competences"] = $nb_Competences;
        $this->load->view('V_Apropos', $data);
        
//       print_r($data["Competences"]);
        
            $Competences=$this->M_Competences->recupDataC();
            $Formation=$this->M_Formation->recupDataF();
            $Exp=$this->M_Exp->recupDataE();
        
    }
    
        //recupere toutes les compétences
    public function get_Competences() {
        $Competences = $this->M_Competences->recupDataC();
        $res = array();
        for ($i = 0; $i < sizeof($Competences); $i++) {
            $index = $i +1;
            $res["Competences$index"] = $Competences[$i];
        }
        
        return $res;
    }
    
    //recupere un projet par le biais de son id
    public function RecupId($id) {
        $project = $this->M_Competences->RecupId($id);
        return $Competences;
    }
    

    //ajoute un projet a la bdd, acces a la fonction via formulaire
    public function ajout_Competences() {
        $this->load->model('M_Competences');
    
        
        //test si les données ont été renseigné
        if (isset($_POST['Compétences'])) {
            if (!empty($_POST['Compétences'])){

                $Competences = $this->input->post('Compétences');
                

                $this->M_Competences->ajout_Competences($Competences);

                $base_url = base_url();
                header("location: $base_url/C_Apropos");
            } else {
                return "Veuillez remplir les champs.";
            }
        
                
        }
            
}

}


            
?>