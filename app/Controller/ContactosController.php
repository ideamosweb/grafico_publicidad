<?php
class ContactosController extends AppController {
	public $helpers = array('Js', 'Html', 'Form', 'Session');

	public function index(){
		$this->set('title_for_layout', '');				
	}

	public function process(){
		$this->Contacto->set($this->data);
		if($this->Contacto->validates()){
		    // do stuff with valid data
		    print_r($this->data);
		}
		return $this->data;
		$this->render(false);
	}		
}