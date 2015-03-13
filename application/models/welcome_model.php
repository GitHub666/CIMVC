<?
class Welcome_model extends CI_Model{

	function __construct(){
		//Llamado al contructor del modelo
		parent::__construct();
	}

	public function insertar_alumno($persona){
		if ($this->db->insert('usu_al', $persona)) 
			return true;
		else
			return false;		
	}

	public function insertar_docente($persona){
		if ($this->db->insert('usu_doc', $persona)) 
			return true;
		else
			return false;		
	}

	public function insertar_ramo($ramo){
		if ($this->db->insert('ramos', $ramo))
			return true;
		else
			return false;
	}

	public function get_areas(){
		$query = $this->db->query('SELECT area_id, area_nom FROM areas');
    	if ($query->num_rows() > 0) {
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->area_id, ENT_QUOTES)] = 
			htmlspecialchars($row->area_nom, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
	}

	public function get_docente(){
		$query = $this->db->query('SELECT doc_id, doc_nom FROM usu_doc');
	    if ($query->num_rows() > 0) {
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->doc_id, ENT_QUOTES)] = 
			htmlspecialchars($row->doc_nom, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
	}

	public function get_alumno(){
		#$this->db->order_by('al_id DESC');		  
		$query = $this->db->query('SELECT usu_al.al_id,usu_al.al_rt,usu_al.al_dv, usu_al.al_nom,usu_al.al_lastn, areas.area_nom, areas.area_id from areas inner join usu_al on areas.area_id = usu_al.areas_area_id');
		return $query->result();
		//}
	}

	public function get_doc(){
		#$this->db->order_by('al_id DESC');
		$query = $this->db->query('SELECT usu_doc.doc_id,usu_doc.doc_rt,usu_doc.doc_dv, usu_doc.doc_nom,usu_doc.doc_lastn, areas.area_nom, areas.area_id from areas inner join usu_doc on areas.area_id = usu_doc.areas_area_id ');
		return $query->result();
	}

	public function eliminarAlu($id){
		$this->db->where('al_id', $id);
		return $this->db->delete('usu_al'); 
	}

	public function eliminarDoce($id){
		$this->db->where('doc_id', $id);
		return $this->db->delete('usu_doc'); 
	}

	public function validate_credentials($username, $password){
        $this->db->where('log_rt', $username);
        $this->db->where('log_pass', $password);
        return $this->db->get('login')->row();
    }

}	