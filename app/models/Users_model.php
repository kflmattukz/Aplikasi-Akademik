<?php

class Users_model extends Database
{
	private $table = 'users';
	private	$db;

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
		$query = "UPDATE " . $this->table . " SET updated_at=NOW() WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id' , $userId);
    $this->db->execute();
    return $this->db->affectedRow();
	}

	public function addUser($data)
	{
		$firstName = $data['firstName'];
		$lastName = $data['lastName'];
		$username = $data['username'];
		$password = $data['password'];
		$email = $data['email'];
		$gender = $data['gender'];

		$query  = "INSERT INTO " . $this->table .  " (firstName , lastName , username , password , email , gender)
							 VALUES ( :firstName ,
							 					:lastName ,
												:username,
												:password,
												:email,
												:gender )
							";

		$this->db->query($query);
		$this->db->bind('firstName' , $firstName);
		$this->db->bind('lastName' , $lastName);
		$this->db->bind('username' , $username);
		$this->db->bind('password' , $password);
		$this->db->bind('email' , $email);
		$this->db->bind('gender' , $gender);
		$this->db->execute();
		return $this->db->affectedRow();

		var_dump($data);
	}

	public function getAllUsers()
	{
		$query = "SELECT * FROM " . $this->table;
		$this->db->query($query);
		$this->db->execute();
		return $this->db->resultSet();
	}

	public function delAdminById($adminId)
	{
		$query = "DELETE FROM " . $this->table . " WHERE id=:id ";
		$this->db->query($query);
		$this->db->bind('id' , $adminId);
		$this->db->execute();
		return $this->db->affectedRow();
	}

}