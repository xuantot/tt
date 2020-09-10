<?php
function get_root() // Request::root() // Returns: http://laravel.dev 
{
return request()->root() ;
}
function redirect()
{
	$url = get_root();
	echo '<script type="text/javascript">window.location.href = "'.$url.'";</script>';
	exit();
}
redirect();
?>