<?php
include('connect.php');
class InsertToDB{
	private $dbConnect;
	private $arr;
	function __construct(ConnectInterface $dbConnect ,$arr){
		 $this->dbConnect = $dbConnect;
		 $fname = $arr['first_name'];
         $lname = $arr['last_name'];
	     $age   = $arr['age']; 
		
		$sql = "INSERT INTO user(first_name, last_name, age) VALUES ('$fname', '$lname' , '$age')";
		
		if ($this->dbConnect->conn->query($sql)  === true) {
			$result['status'] = "success";
			$resutl['data']=[];
		}  
		else{
			$result['status'] = "error";
			$result['data']=[];
		}
		echo json_encode($result);
		$this->dbConnect->conn->close();
		
	}
	
   

    }

$post_data = new InsertToDB($con,$_POST);