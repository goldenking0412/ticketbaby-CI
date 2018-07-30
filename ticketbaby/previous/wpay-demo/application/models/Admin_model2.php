<?php
class Admin_model2 extends CI_Model {

        public function __construct()
		{
			parent::__construct();
        }

        public function createUser($email, $passwords) {
			//ensure the email is unique
			 if($this->can_create($email))
			 {
			     $data = array(
			         "email" => $email,
			         "password" => MD5($passwords)
			     );

			     $this->db->insert("registration", $data);

			     return true;
			 }

			 return false;
        }

        public function can_create($email) {
     		$query = $this->db->get_where("registration", array("email" => $email));
     		return ($query->num_rows() < 1) ? true : false;
        }


		public function get_userdata()
		{
			$query = $CI->db->get_where("users", array("id" => $this->session->userdata("admin_session")["id"]));
			return $query->row();			
		}

	
		public function authenticateAdmin2($username, $password) 
		{			
			$this->db->select('id, password, first_name, email, active');
			$this->db->from('registration');
			$this->db->where('username', $username);
			$this->db->where('password', MD5($passwords));
			$this->db->limit(1);

			$query = $this->db->get();

			if($query->num_rows() == 1)
			{
				return $query->row_array();
			}
			else
			{
				return false;
			}

		}



		function set_config ( $data ) {		
			foreach ($data as $key=>$val) {
				$config_data = array('value' => $val);
				$this->db->where('field', $key);
				$this->db->update('config', $config_data); 
			}
			$array["success"] = true;
			$array["message"] = "Settings updated successfully";
			return $array;
		}

		function get_config () {
			$this->db->select('config.*');
			$this->db->from('config');
			$this->db->where('config.editable', 'Y');		
			$this->db->order_by('config.priority ASC');
			$this->db->order_by('config.category ASC');
			$query = $this->db->get();
			//echo $this->db->last_query();
			return $query->result_array();
		}



}