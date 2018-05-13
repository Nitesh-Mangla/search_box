<?php
	error_reporting(E_ALL);
	$query = '';
	if(isset($_REQUEST['search']) && $_REQUEST['search'] !=''){
		$query = $_REQUEST['search'];
	
	}
	
	function find_value($value,$content){
			return strpos($content,$value) === 0;
	}
	
	function result($query1,$file_content){
		$search = array();		
		foreach($file_content as $value ){
		if(find_value($query1,strtolower($value))){	
		
			$search[] = $value;
		}
		}
		return $search; 
	}
		
	$choice = file('word.txt',FILE_IGNORE_NEW_LINES);
	echo json_encode(result(strtolower($query),$choice));
?>