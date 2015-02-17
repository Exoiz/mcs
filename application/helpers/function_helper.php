<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function url($uri='')
{
	$url_array = explode('/',site_url($uri));
	$x = count($url_array);
	$url = '';
	for ($i=3; $i<$x; $i++){
		$url.= '/'.$url_array[$i];
	}
	return $url;
}

/* End of file lang_url_helper.php */
/* Location: ./application/helper/lang_url_helper.php */