<?php  
class Blog_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_blog($id_konten= FALSE){
		
		if($id_konten === FALSE){
		$query = $this->db->get('konten');
		return $query->result_array();//result hasilnya banyak
		}

		$query = $this->db->get_where('konten', array('id_konten' => $id_konten));
		return $query->row_array();// row hasilnya 1
	}

}


?>
