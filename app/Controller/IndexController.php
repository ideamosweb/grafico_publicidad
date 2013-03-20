<?php
class IndexController extends AppController {
	public $helpers = array('Js', 'Html', 'Form', 'Session');

	public function index(){
		$this->set('title_for_layout', 'Inicio');
	}
}