<?php  
function J($str){
	return str_replace('./', '', str_replace('//', '/', $str));
}
return array(
	  'TMPL_PARSE_STRING'         => array(
	    '__PUBLIC__' => __APP__.'/App/Tpl/Admin/Public',
		'__STYLE__' => J ( __ROOT__ . '/' . TMPL_PATH . '/_static' ),
    	),
	  'URL_HTML_SUFFIX'           =>'',
	);
?>