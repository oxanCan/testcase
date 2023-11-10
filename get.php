<?php
	if(!$_GET){
	 include('views/index.php');
}else{
	switch($_GET['target']){
		case 'login': include('views/login.php'); break;
		case 'register': include('views/register.php');  break;
		case 'about': include('views/about.php');  break;
		case 'contact': include('views/contact.php');  break;
		case 'blog': include('views/blog.php');  break;
		case 'blogtext': include('views/blogtext.php');  break;
		case 'categories': include('views/categories.php');  break;
		default : include('views/index.php');  break;
		}	
	}
