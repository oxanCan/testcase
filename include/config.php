<?php
session_start();
include'db.php';
ini_set('display_errors', 0);
error_reporting(E_ALL);


const MYSQL_HOST = 'localhost';
const MYSQL_DB = 'blog';
const MYSQL_USER = 'root';
const MYSQL_PASS = '';

const site_url = "http://localhost/blogv3/";



include '../classes/Blog.php';
include '../classes/Contact.php';
include '../classes/Auth.php';

