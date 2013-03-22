<?php
class Contacto extends AppModel {
    var $useTable = false;
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
        'city' => array(
            'rule' => 'notEmpty',
            'required' => true
        ),
        'msg' => array(
            'rule' => 'notEmpty',
            'required' => true
        )
    );
}