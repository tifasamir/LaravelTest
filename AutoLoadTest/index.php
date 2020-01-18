<?php

require 'bootstrap.php';
require_once 'router.php';

$usersCon =new App\Controller\UserController;

		try{
		//	include 'connection.php';
			$method_name=$_SERVER["REQUEST_METHOD"];
			$action = $_SERVER['REQUEST_URI'];
			if($_SERVER["REQUEST_URI"]){
				switch ($action) 
				{
					case '/LaravelTest/AutoLoadTest/getall':
					{
						// echo '/index';
						// echo $action ;
						
							
							echo '/getall';
						//	$users = new App\User;
						//	echo $users::all();
							 $usersCon->getAll()->echoResult();
							echo '<br/>';
							echo '<hr/>';

						break;
					}	
					case '/LaravelTest/AutoLoadTest/getFirst':	
					{
						echo '/getFirst';
						echo '<br/>';
						echo $action ;
						 $usersCon->getAll()->getFirst()->echoResult();
						 echo '<hr/>';
						break;
					}  
					case '/LaravelTest/AutoLoadTest/getLimit5':	
						{
							echo '/getLimit5';
							echo '<br/>';
							echo $action ;
							$usersCon->getAll()->getLimit5()->echoResult();
							break;
						}//getLimit5
					case '/LaravelTest/AutoLoadTest/createArray':	
						{
							echo '/createArray';
							echo '<br/>';
							echo $action ;
							$usersCon->createArray();
							break;
						}//	
					case '/LaravelTest/AutoLoadTest/createobj':	
						{  
								//Make sure that it is a POST request.
								if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
									throw new Exception('Request method must be POST!');
								}
								
								//Make sure that the content type of the POST request has been set to application/json
								$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
								if(strcasecmp($contentType, 'application/json') != 0){
									throw new Exception('Content type must be: application/json');
								}
								
								//Receive the RAW post data.
								$content = trim(file_get_contents("php://input"));
								
								//Attempt to decode the incoming RAW post data from JSON.
								$decoded = json_decode($content, true);
								
								//If json_decode failed, the JSON is invalid.
								if(!is_array($decoded)){
									throw new Exception('Received content contained invalid JSON!');
								}
							
							// echo '/createobj';
							// echo '<br/>';
							// echo $action ;

						
					//    var_dump($decoded);
				//  echo $content;
			
						//	   echo $decoded;
						  $usersCon->createobj($decoded );
							break;
						}//			

				}
			}else{
				$data=array("status"=>"0","message"=>"Please enter proper request method !! ");
				echo json_encode($data);
			}
			}catch(Exception $e) {
			 echo 'Caught exception: ',  $e->getMessage(), "\n";
		    }

	
// $usersCon =new App\Controller\UserController;
// echo $usersCon->getFirst();
// echo '<hr/>';
// //echo $usersCon->createArray();
// echo $usersCon->getLimit5();

// echo '<hr/>';
// echo $usersCon->index();

?>