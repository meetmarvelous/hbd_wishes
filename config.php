<?php
define('SITE_ROOT', ''); // If installed on a sub-folder, replace the empty constant with the folder's name
define('PAGINATION', 4); // Pagination results per page

if (!empty(SITE_ROOT)) {
	$url_path = SITE_ROOT . "/";
} else {
	$url_path = "http://localhost/Ayo%20Workspace/Card/";
	// $url_path = "/Ayo%20Workspace/Card/";
}