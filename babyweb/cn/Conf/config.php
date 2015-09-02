<?php
$config	=	require '../../config.inc.php';
$siteconfig	=	require '../../siteconfig.inc.php';
$array = array(	
	'URL_HTML_SUFFIX' => '.shtml',
	//'URL_MODEL' => '2',
	'URL_CASE_INSENSITIVE' =>true,
	'URL_ROUTER_ON'=>true, 
);

return array_merge($config,$siteconfig,$array);
?>