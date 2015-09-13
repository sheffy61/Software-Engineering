<?php
include("adb.php");

class persons extends adb{

	/**
	** A function to get a person identified by ID
	**/

function get_id($person_id){
		$str_query="select * from persons where person_id=$person_id";
		if(!$this->query($str_query)){
			return false;
		}	
		return $this->fetch();
	}

	 //functions to add,search,delete and update the details of a person

	function search_by_name($person_name){
		$str_query="select * from persons 
				where person_name like '%$person_name%'";
		
		return $this->query($str_query);
	
	}
	
	function add_person($person_name, $person_id,$address, $major){
		$str_query="insert into persons set
                     person_name='$person_name', person_id='$person_id',
                     address = '$address',major='$major'";

                      return $this->query($str_query);
	}

	function delete_person($person_name){
			$str_query="delete from persons where person_name='$person_name'";	

			 return $this->query($str_query);	 
		}

	function edit_person($person_id,$person_name,$major,$address){

		$str_query="update persons set person_id='$person_id', person_name ='$person_name', 
	major ='$major', address='$address' where person_id =$person_id";

	return $this->query($str_query);
	}
}

function view_one_person(){
		if(isset($_GET['person_id'])){
			$person_id = $_GET['person_id'];
			$str_query="select * from persons where person_id = '$person_id'";
			if(!$this->query($str_query))
				return false;
		    return $this->fetch();
		}
	}
?>