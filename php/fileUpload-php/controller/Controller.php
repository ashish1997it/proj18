<?php
include_once('model/Model.php');
include_once('view/View.php');
//echo "inControllerFile..<br>";

$objModel = new Model();
$objView = new View();
$objCtrl = new Controller($objModel, $objView);

class Controller
{
  public $model;
  public $view;

  public function __construct()
  {
	$this->model = new Model();
  }

  public function funCtrlRun()
  {
	include('view/Form.php');
	  
	if(isset($_GET['file']))
	{
		$fileName = $this->model->funCtrlModel($_GET['file']);
		$fileStatus = $fileName;
		include('view/FileStatus.php');
	}
  
	
  }

}

?>
