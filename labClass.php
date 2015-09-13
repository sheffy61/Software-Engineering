<?php
include("adb.php");

class labs extends adb{


	 //functions to add,search and delete 

	function search_by_name($lab_name){
		$str_query="select * from labs 
				where lab_name like '%$lab_name%'";
		
		return $this->query($str_query);
	
	}
	
	function add_lab($lab_name, $lab_id){
		$str_query="insert into labs set
                     lab_name='$lab_name', lab_id='$lab_id'";

                      return $this->query($str_query);
	}

	function delete_lab($lab_name){
			$str_query="delete from labs where lab_name='$lab_name'";	

			 return $this->query($str_query);	 
		}
	}
?>