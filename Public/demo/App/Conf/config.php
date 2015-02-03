<?php
function J($str){
	return str_replace('./', '', str_replace('//', '/', $str));
}
return array (
		'tmpl_parse_string' => array (
				'__STYLE__' => J ( __ROOT__ . '/' . TMPL_PATH . '/_static' ),
				'__PUBLIC__' => J ( __ROOT__ . '/public' ) 
		) 
);
?>