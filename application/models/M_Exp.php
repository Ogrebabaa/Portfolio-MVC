<?php


Class M_Exp extends CI_Model {

public $id_Exp;
public $libelle;

    
    //recupere tout les projets
public function recupDataE(){
$this->load->database();
$query = $this->db->query("SELECT * FROM pfc_exp");   // Produces: SELECT * FROM mytable
print_r($query->result());
}
    // recupere via l'id
    
    public function recupId($id){
        $this->load->database();
        $query = $this->db->query("SELECT Libelle");
            print_r($query->result());
    }
    
    // Ajout Expérience
    public function ajout_Exp($Libelle){
        $this->load->database();
        $now = date("Y-m-d H:i:s");
        
        $data = array(
        'Libelle' => $Libelle);
    $this->db->insert('pfc_exp', $Libelle);
    }
    
    //supprimer experience
    public function suppr_Exp($id){
        $this->load->database();
        
        $query = "DELETE FROM pfc_exp WHERE id = ?";
        $this->db->query($query, array($id));

}
    //modifier le libelle
    
    public function set_Libelle($id,$Libelle){
        $this->load->database();
        $query = "UPDATE FROM pfc_exp WHERE id=?";
        $this->db->query($query, array($id, $Libelle));
    }
    // GETTERS
      public function get_Libelle($id) {
        $this->load->database();

        $query = "SELECT description FROM pfc_exp WHERE id = ?";
        $this->db->query($query, array($id));
        return $query->result();

    }
}



















?>
