<?php
function JS($str){
	return str_replace('./', '', str_replace('//', '/', $str));
}