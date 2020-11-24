<?php


Class M_Competences extends CI_Model {

public $id;
public $Competences;
    


public function recupDataC(){
$this->load->database();
$query = $this->db->query("SELECT * FROM pfc_competences");  // Produces: SELECT * FROM mytable
//print_r($query->result());
    return $query->result();

}
        // recupere via l'id
    
    public function recupId($id){
        $this->load->database();
        $query = $this->db->query("SELECT Competences");
            print_r($query->result());
    }
    
    // Ajout Competences
    public function ajout_Competences($Competences){
        $this->load->database();
        $now = date("Y-m-d H:i:s");
        
        $data = array(
        'Competences' => $Competences);
    $this->db->insert('pfc_formations', $Competences);
    }
    
    //supprimer Competences
    public function suppr_competences($id){
        $this->load->database();
        
        $query = "DELETE FROM pfc_formations WHERE id = ?";
        $this->db->query($query, array($id));
    
}
    //modifier le Competences
    
    public function set_Competences($id,$Competences){
        $this->load->database();
        $query = "UPDATE FROM pfc_formations WHERE id=?";
        $this->db->query($query, array($id, $Competences));
    }
    // GETTERS
      public function get_Competences($id) {
        $this->load->database();

        $query = "SELECT description FROM pfc_formations WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }
    
    
}




















?>
