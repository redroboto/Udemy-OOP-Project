<?php 
abstract class Controller {
	protected $request;
	protected $action;

	public function __construct($action, $request){
		$this->action = $action;
		$this->request = $request;
	}

	public function executeAction(){
		return $this->{$this->action}();
	}

	protected function returnView($viewmodel, $fullview){
		//view folder name should be the same as the class name
		$view = 'views/'. get_class($this). '/' . $this->action. '.php';

		//check if full view which will show the standard template or if it's a view with a specific layout
		if($fullview){
			require ('views/main.php');
		}
		else {
			require($view);
		}
	}
}

 ?>
