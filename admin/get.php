<?php

	if(!$_GET){
	 include('views/index.php');
}else{
	switch($_GET['target']){
		case 'index': include('views/index.php');  break;
		case 'editblog': include('views/editblog.php'); break;
		case 'addmod': include('views/addmod.php'); break;
		case 'login': include('views/login.php'); break;
        case 'addblog':
			$check_per = permission($_GET['target']);
		if($check_per){
			include ('views/addblog.php'); 
			break;
		}else{
			echo "<script>window.location.href = '".site_url."';</script>";
		}
		case 'bloglist': 
			$check_per = permission($_GET['target']);
		if($check_per){
			include ('views/bloglist.php'); 
			break;
		}else{
			echo "<script>window.location.href = '".site_url."';</script>";
		}
		case 'contact':
			$check_per = permission($_GET['target']);
		if($check_per){
			include ('views/contact.php'); 
			break;
		}else{
			echo "<script>window.location.href = '".site_url."';</script>";
		}
		case 'editabout':
			$check_per = permission($_GET['target']);
		if($check_per){
			include ('views/editabout.php');
			break;
		}else{
			echo "<script>window.location.href = '".site_url."';</script>";
		}
		case 'roles': 
			$check_per = permission($_GET['target']);
		if($check_per){
			include ('views/roles.php'); break;
		}else{
			echo "<script>window.location.href = '".site_url."';</script>";
		}	
		default : include('views/login.php');  break;
		}	
	}
	
	?>
