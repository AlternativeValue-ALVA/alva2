<?php 
/*  <ALVA V2 - ALVA CMS v2>
    Copyright (C) <2014>  <Momcilo Moki Micanovic>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. 
*/

define('INCLUDE_ALLOWED', true);
$page = preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['page']);
$get = preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['get']);
$get2 = preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['get2']);
$get3 = preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['get3']);
$site = 'http://'.$_SERVER['HTTP_HOST'];
error_reporting(E_ALL ^ E_NOTICE);
include "app/config.php";
include "app/detect.php";
require_once("app/models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("app/models/header.php");
if (file_exists('pages/' . $p . '.php')) 
{
	include 'pages/' . $p . '.php';
} 
else
{
	include 'pages/index.php';
}

/*
if ($page_name=='') 
{
	include $browser_t.'/index.html';
}
elseif ($page_name=='index.html') 
{
	include $browser_t.'/index.html';
}
elseif ($page_name=='contact-post.html') 
{
	include $browser_t.'/contact.html';
	include 'app/contact.php';
}
else
{
	include $browser_t.'/404.html';
}
*/
?>
