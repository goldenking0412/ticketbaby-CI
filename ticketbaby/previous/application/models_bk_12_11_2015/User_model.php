<?php
class User_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_user_by_username($username = FALSE)
		{
			if ($username === FALSE)
			{
			        $query = $this->db->get('user_master');
			        return $query->result_array();
			}

			$query = $this->db->get_where('user_master', array('username' => $username));
			return $query->row_array();
		}

		public function registerUser($data) 
		{

			$first_name         = trim($data['first_name']);
            $email        	 	= trim($data['email']);
            $password      		= trim($data['password']);

            if ( $first_name == "" || $email == "" || $password == "") {
            	$array["success"] = false;
				$array["message"] = "All field are mandatory";
				return $array;	
            }

			$this->db->select('id, username, email');
			$this->db->from('user_master');
			$this->db->where('email', $email);
			$this->db->limit(1);

			$query = $this->db->get();

			if($query->num_rows() == 1)
			{	
				$array["success"] = false;
				$array["message"] = "Email already exist!";
				return $array;
			}
			else
			{ 
				$user_data = array(
				'username' => $email,
				'password' => MD5($password),
				'first_name' => $first_name,
				'email' => $email,
				'active' => 'Y',
				'created' => date("Y-m-d H:i:s")
				);

				$this->db->insert('user_master', $user_data); 
				$user_id = $this->db->insert_id();

				if ( $user_id > 0 ) {
					$array["success"] = true;
					$array["message"] = "Success";
					return $array;
				}
				
			}

			$array["success"] = false;
			$array["message"] = "Error!, Try again later";
			return $array;

		}



		/*
		Backend
		*/

		public function get_user_by_id($user_id = 0)
		{
			if ( $user_id > 0 )
			{
		        $query = $this->db->get_where('user_master', array('id' => $user_id));
		        return $query->row_array();
			}else{
				return FALSE;
			}	
		}

		public function record_count() {
			return $this->db->count_all("user_master");
		}

		public function get_users($username = FALSE,$limit,$start)
		{
			$this->db->limit($limit, $start);
			if ($username === FALSE)
			{
					$this->db->where('user_master.id_admin', '0');
			        $query = $this->db->get('user_master');       
			        return $query->result_array();
			}
			$query = $this->db->get_where('user_master', array('username' => $username));
			return $query->row_array();
		}

		public function createUpdateUser($data) 
		{
			print_r($data);
			exit;
		}


}