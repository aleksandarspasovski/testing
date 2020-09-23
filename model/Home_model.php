<?php 

class Home_model extends Database
{
	public function userInfo($result)
	{
		$db = $this->db;
		// linija 10 i 11 upisuju sve podatke iz prosledjenog niza $result u prethodno kreiranoj tabeli

	  	$sql = 'insert into profacture values(null, "'.$result[0].'","'.$result[1].'","'.$result[2].'","'.$result[3].'","'.$result[4].'","'.$result[5].'","'.$result[6].'","'.$result[7].'","'.$result[8].'","'.$result[9].'")';
	    $res = $db->query($sql);
	}
	public function showResult()
	{
		$db = $this->db;

		$sql = 'select * from profacture';
		$res = $db->query($sql);
		// $array = [];
		// while ($result = $res->fetch_assoc()) {
		// 	$array[] = $result;
		// }
		// echo json_encode($array);
		return $res;
		
	}
	public function showByCategory($category)
	{
		$db = $this->db;
		$sql = 'select * from profacture where category_name = "'.$category.'"';
		$res = $db->query($sql);
		return $res;
	}
	public function chng($id)
	{
		$db = $this->db;
		$sql = 'select * from profacture where id = "'.$id.'"';
		$res = $db->query($sql);
		$result = $res->fetch_assoc();
		return $result;
	}
	public function update($id,$model_number,$category_name,$deparment_name,$manufacturer_name,$upc,$sku,$regular_price,$sale_price,$description)
	{
		$db = $this->db;
		$sql = 'update profacture set model_number = "'.$model_number.'", category_name = "'.$category_name.'", deparment_name = "'.$deparment_name.'", manufacturer_name = "'.$manufacturer_name.'", upc = "'.$upc.'", sku = "'.$sku.'", regular_price = "'.$regular_price.'", sale_price = "'.$sale_price.'", description = "'.$description.'" where id = "'.$id.'"';
		$res = $db->query($sql);
		return $res;
	}
	public function delete($id)
	{
		$db = $this->db;

		$sql = 'delete * from profacture where id = "'.$id.'"';
		$res = $db->query($sql);
		return true;
	}
}