<?php 

class Bootstrap{
	private $controller;
	private $action;
	private $request;

	public function __construct($request){
		$this->request = $request;

		//check if the request has a controller; if not, set to home
		if ($this->request['controller'] == ""){
			$this->controller = 'home';
		}
		else {
			$this->controller = $this->request['controller'];
		}

		//check if the request has a controller; if not, set to index
		if($this->request['action'] == ""){
			$this->action = 'index';
		}
		else{
			$this->action = $this->request['action'];
		}
	}

	//Instantiate the controller found in the url
	public function createController(){
		// Check Class
		if(class_exists($this->controller)){
			$parents = class_parents($this->controller);
			//Check Extend
			if(in_array("Controller", $parents)){
				if(method_exists($this->controller,$this->action)){
					return new $this->controller($this->action, $this->request);
				}
				else {
					//Method does not exist
					echo '<h1> Method does not exist. </h1>';
					return;
				}
			}
			else {
				//Base Controller Not Found
				echo '<h1> Base controller not found </h1>';
				return;
			}
		}
		else {
			//Controller class does not exist
			echo '<h1> Controller class does not exist. </h1>';
			return;
		}
	}
}

 ?>
