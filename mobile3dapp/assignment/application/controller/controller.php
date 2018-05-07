<?php
// Create the controller class for the MVC design pattern
class Controller {
	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
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
	function models()
	{
		$this->load->view('modelsViewUpdated');
	}
	function about()
	{
		$this->load->view('aboutView');
	}
	function contact()
	{
		$this->load->view('contactView');
	}
	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetModelDataJSON()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}  
	function createHomeInfoJSON()
	{
		$data = $this->model->createJSON();
	}  
	
}
?>    