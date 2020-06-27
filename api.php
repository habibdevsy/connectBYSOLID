<?php

class ApiClass{
	function api($arr){
		if($arr['REQUEST_METHOD'] == 'POST'){
			include('post_data.php');
			}
		elseif($arr['REQUEST_METHOD'] == 'GET'){
			include('get_data.php');
			}
		}	
	}
	
$api = new ApiClass();
$api->api($_SERVER);