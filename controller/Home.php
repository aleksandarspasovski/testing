<?php 


class Home extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->view->showRes = $this->model->showResult();
		$this->view->showCategory = $this->model->showResult();
		$this->view->render('home');
	}
	public function display()
	{
		$filename = 'dbase.csv';

		$result = []; 

		$file = fopen($filename, "r");

		$data = fgetcsv($file, 1000, ",");

		$home = new Home_model();

		  while (($data = fgetcsv($file, 1000, ",")) !== FALSE) 
		  {
		  	$result = $data;
			$home->userInfo($result);
		  }
	}
	public function res()
	{
		$this->view->showRes = $this->model->showResult();
	}
	public function showCategory()
	{
		$category = $_POST['category'];
		$this->view->category = $this->model->showByCategory($category);
		$this->view->render('home');
		

	}
	public function changeProduct($id)
	{
		$this->view->change = $this->model->chng($id);
		$this->view->render('edit');
	}
	public function saveEdit($id)
	{
		$model_number = $_POST['model_number'];
		$category_name = $_POST['category_name'];
		$deparment_name = $_POST['deparment_name'];
		$manufacturer_name = $_POST['manufacturer_name'];
		$upc = $_POST['upc'];
		$sku = $_POST['sku'];
		$regular_price = $_POST['regular_price'];
		$sale_price = $_POST['sale_price'];
		$description = $_POST['description'];

		$home = new Home_model();
		$home->update($id,$model_number,$category_name,$deparment_name,$manufacturer_name,$upc,$sku,$regular_price,$sale_price,$description);
	}
	public function deleteProduct($id)
	{
		$home = new Home_model();
		$home->delete($id);
	}
}