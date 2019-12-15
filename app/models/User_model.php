<?php

class User_model extends Database
{
  private $table = 'users';
	private $db;

  public function __construct()
	{
		$this->db = new Database;
  }
  
  public function login($data)
  {
    $username = $data['username'];
    $password = $data['password'];
    $query = "SELECT * FROM " . $this->table . " WHERE username=:username AND password=:password LIMIT 1";
    $this->db->query("$query");
    $this->db->bind('username' , $username);
    $this->db->bind('password' , $password);
    return $this->db->single();
  }

  public function logout($userId)
  {
    $query = "UPDATE " . $this->table . " SET last_login=NOW() WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id' , $userId);
    $this->db->execute();
    return $this->db->affectedRow();
  }

}