<?php


Class M_Formation extends CI_Model {

public $id_Competences;
public $libelle;

public function recupDataF(){
$this->load->database();
$query = $this->db->query("SELECT * FROM pfc_formations");  // Produces: SELECT * FROM mytable
print_r($query->result());
}
    
    // recupere via l'id
    
    public function recupId($id){
        $this->load->database();
        $query = $this->db->query("SELECT Libelle");
            print_r($query->result());
    }
    
    // Ajout Formations
    public function ajout_Formations($Libelle){
        $this->load->database();
        $now = date("Y-m-d H:i:s");
        
        $data = array(
        'Libelle' => $Libelle);
    $this->db->insert('pfc_formations', $Libelle);
    }
    
    //supprimer Formations
    public function suppr_Formations($id){
        $this->load->database();
        
        $query = "DELETE FROM pfc_formations WHERE id = ?";
        $this->db->query($query, array($id));

}
    //modifier le libelle
    
    public function set_Libelle($id,$Libelle){
        $this->load->database();
        $query = "UPDATE FROM pfc_formations WHERE id=?";
        $this->db->query($query, array($id, $Libelle));
    }
    // GETTERS
      public function get_Libelle($id) {
        $this->load->database();

        $query = "SELECT description FROM pfc_formations WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }
}
    

?>