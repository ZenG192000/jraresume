<?php

class Students_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = 'students';
	}

	public function rows()
	{
		$query = $this->db->get($this->table);
		return $query->result();
	}
	public function add($data)
	{
		$this->db->insert($this->table, $data);
		return true;
	}
}

?>