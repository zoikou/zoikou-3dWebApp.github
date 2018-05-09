<?php
// The controller class for the MVC design pattern
class Controller {
	// Public variables for the controller class
	public $load;
	public $model;
	
	// Functions for the controller class
	function __construct($pageURI = null)
	{
		// echo $pageURI;
		$this->load = new Load();
		$this->model = new Model();
		// Determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home()
	{
		$this->load->view('masterView');
	}
	// models page function
	function models()
	{
		$this->load->view('modelsViewUpdated');
	}
	// about page function
	function about()
	{
		$this->load->view('aboutView');
	}
	// contact page function
	function contact()
	{
		$this->load->view('contactView');
	}
	// function to create a table
	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	// function to insert data in the table
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	// function to get JSON data 
	function apiGetModelDataJSON()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}  
	// function to create a JSON info data
	function createHomeInfoJSON()
	{
		$data = $this->model->createJSON();
	}  
	
}
?>    