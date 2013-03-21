<?php
class ProductosController extends AppController {
	public $helpers = array('Js', 'Html', 'Form', 'Session');

	public function index(){
		$this->set('title_for_layout', '');
		$this->set('img_cicle', array('litografia_papeleria.png', 'tarjeteria_social.png', 'impresion_digital.png'));
	}

	public function show($id = null){
		if (!$id) {
            throw new NotFoundException(__('Pagina invalida'));
        }

        if ($this->request->is('get')) {        	
        }
	}
}