<?php
include("adb.php");

class manufacturer extends adb{

/**
** A function to get a person identified by ID
**/

function get_id($manufacturer_id){
$str_query="select * from manufacturer where manufacturer_id=$manufacturer_id";
if(!$this->query($str_query)){
	return false;
}	
return $this->fetch();
}

//functions to add,search,delete and update the details of a person

function search_by_name($manufacturer_name){
$str_query="select * from manufacturer 
		where manufacturer_name like '%$manufacturer_name%'";

return $this->query($str_query);

}

function add_manufacturer($manufacturer_name, $manufacturer_id, $address){
$str_query="insert into manufacturer set
             manufacturer_name='$manufacturer_name', manufacturer_id='$manufacturer_id',
             address='$address'";

              return $this->query($str_query);
}

function delete_manufacturer($manufacturer_name){
	$str_query="delete from manufacturer where manufacturer_name='$manufacturer_name'";	

	 return $this->query($str_query);	 
}

function edit_manufacturer($manufacturer_id,$manufacturer_name,$address){

$str_query="update manufacturer set manufacturer_id='$manufacturer_id', manufacturer_name ='$manufacturer_name', 
address='$address' where manufacturer_id =$manufacturer_id";

return $this->query($str_query);
}
}

function view_one_manufacturer(){
if(isset($_GET['manufacturer_id'])){
	$manufacturer_id = $_GET['manufacturer_id'];
	$str_query="select * from manufacturer where manufacturer_id = '$manufacturer_id'";
	if(!$this->query($str_query))
		return false;
    return $this->fetch();
}
}
?>