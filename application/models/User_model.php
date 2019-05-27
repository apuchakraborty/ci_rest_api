<?php
	class User_model extends CI_Model{
		public function get_users(){
			$this->db->order_by('name');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		public function register($enc_password){
			// User data array
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password,
                'user_role' => $this->input->post('user_role'),
                'zipcode' => $this->input->post('zipcode')
			);

			// Insert user
			return $this->db->insert('users', $data);
		}

		// Log user in
		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
		}

		public function userrole(){
			$query = $this->db->get('userrole');
			return $query->result_array();
		}

		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		public function delete_user($id){
			$this->db->where('id', $id);
			$this->db->delete('users');
			return true;
		}
	}