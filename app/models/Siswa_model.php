<?php

class Siswa_model extends Database
{
	private $table = 'siswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllSiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY nama ASC');
		return $this->db->resultSet();
	}

	public function getSiswaById($siswaId)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
		$this->db->bind('id' , $siswaId);
		return $this->db->single();
	}

	public function addSiswa($siswa)
	{
		$this->db->query("INSERT INTO " . $this->table . " VALUES ('', :nama , :jk , :tmpLhr , :tglLhr)");
		$this->db->bind('nama' , $siswa['name']);
		$this->db->bind('jk' , $siswa['jk']);
		$this->db->bind('tmpLhr' , $siswa['tmpLhr']);
		$this->db->bind('tglLhr' , $siswa['tglLhr']);
		$this->db->execute();
		return $this->db->affectedRow();
	}

	public function updateSiswa($siswa)
	{
		$this->db->query("UPDATE " . $this->table . " SET 
											nama = :nama,
											jk = :jk,
											tmpLhr = :tmpLhr,
											tglLhr = :tglLhr
											WHERE id = :id
										");
		$this->db->bind('id' , $siswa['id']);
		$this->db->bind('nama' , $siswa['name']);
		$this->db->bind('jk' , $siswa['jk']);
		$this->db->bind('tmpLhr' , $siswa['tmpLhr']);
		$this->db->bind('tglLhr' , $siswa['tglLhr']);
		$this->db->execute();
		return $this->db->affectedRow();
	}

	public function delSiswaById($siswaId)
	{	
		$this->db->query("DELETE FROM " . $this->table . " WHERE id = :id");
		$this->db->bind('id' , $siswaId);
		$this->db->execute();
		return $this->db->affectedRow();
	}
}