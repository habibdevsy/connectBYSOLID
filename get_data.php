<?php
include('connect.php');
class Get_data{
    private $dbConnect;
    function __construct(ConnectInterface $dbConnect ){
        $this->dbConnect = $dbConnect;
        $sql = "SELECT * FROM user";
        $res= $this->dbConnect->conn->query($sql);
        if($res->num_rows > 0){
            $result['status'] = "success";
            while($r = mysqli_fetch_assoc($res)){
                $result['data'][] = $r;
            }	
        }
        echo json_encode($result);
        $this->dbConnect->conn->close();
    }
}

$get_data = new Get_data($con);