<?php
defined('BASEPATH') or exit('No direct script access allowed');
	class model extends CI_Model {
	public function add($table,$data) {
			$this->db->insert($table,$data);
		}
	public function delete($table,$id) {
			$this->db->where('id',$id);
			$this->db->delete($table);
		}
	public function getRows() {
			return $this->db->get('user_articel')->result();
		}
	public function getId($table,$id) {
			$this->db->where('id',$id);
			return $this->db->get($table)->result();
		}
	public function update($table,$data) {
			$this->db->where('id',$data['id']);
			$this->db->update($table,$data);
		}
	}
?>