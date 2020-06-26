<?php
interface ConnectInterface{
	public function connect($servername, $username, $pass, $dbname);

}

class ConnectMysql implements ConnectInterface{
	protected $servername;
	protected $username;
	protected $pass;
	protected $dbname;
    public $conn; 
	public function connect($servername, $username, $pass, $dbname){
		
		$this->servername = $servername;
		$this->username = $username;
		$this->pass = $pass;
		$this->dbname = $dbname;
		$this->conn = new mysqli($this->servername ,$this->username ,$this->pass ,$this->dbname);
		
		if ($this->conn->connect_error) {
		return die("Connection failed: " . $this->conn->connect_error);
			}
		echo "connected success";
		
	}

}
$con = new ConnectMysql();
$con->connect("localhost", "root", "root", "testdb");


	








