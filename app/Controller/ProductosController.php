<?php
class ProductosController extends AppController {
	public $helpers = array('Js', 'Html', 'Form', 'Session');

	public function index(){
		$this->set('title_for_layout', '');
	}
}