<?php
session_start();
include'db.php';
include'function.php';
error_reporting(E_ALL);
ini_set('display_errors', 0);

const site_url = "http://localhost/blogv3/admin";

const MYSQL_HOST = 'localhost';
const MYSQL_DB = 'blog';
const MYSQL_USER = 'root';
const MYSQL_PASS = '';

include '../classes/Auth.php';
include '../classes/Blog.php';
include '../classes/About.php';
include '../classes/Category.php';
include '../classes/Contact.php';
include '../classes/Role.php';
