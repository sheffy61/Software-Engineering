<?php
include("adb.php");

class inventory extends adb{
	/**
	*a function to get a product identified by id
	*/
	
	function get_equipment($id){
		$str_query="select * from inventory where EQUIPMENT_ID=$equipment_id";
		if(!$this->query($str_query)){
			return false;
		}	
		return $this->fetch();
	}
	/**
	*a function to add,search,delete and update a product
	*/
	function search_by_name($equipment_name){
		$str_query="select * from inventory 
				where equipment_name like '%$equipment_name%'";
		
		return $this->query($str_query);
	}
	function add_equipment($equipment_name, $description,$price, $manufacturer_id,$equipment_id){
		$str_query="insert into inventory set
                     equipment_name='$equipment_name', equipment_id ='$equipment_id',
                     description = '$description',price='$price', 
                     manufacturer_id='$manufacturer_id'";

                      return $this->query($str_query);
	}

	function delete_person($equipment_name){
			$str_query="delete from inventory where equipment_name ='$equipment_name'";	

			 return $this->query($str_query);	 
		}

	function edit_equipment($equipment_id,$equipment_name,$description,$price)
	{
		$str_query="update inventory set equipment_id='$equipment_id', equipment_name ='$equipment_name', 
	description ='$description' price='$price' where equipment_id =$equipment_id";

	return $this->query($str_query);
}

}
?>