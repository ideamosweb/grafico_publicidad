<?php
class Contacto extends AppModel {
	public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'required' => true
        ),
        'email' => array(
            'rule' => 'email',
            'required' => true
        ),
        'tel' => array(
            'rule' => 'numeric',
            'required' => true
        ),
        'msg' => array(
            'rule' => 'notEmpty',
            'required' => true
        )
    );
}