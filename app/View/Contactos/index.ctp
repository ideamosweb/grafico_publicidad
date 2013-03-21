<!-- meta tags !-->
<!-- end meta tags !-->

<!-- css styles !-->
<!-- end css styles !-->

<!-- scripts JS !-->
<?php 
echo $this->Form->create(false, array('action' => 'process'));
echo $this->Form->input('name', array('label' => 'Nombre', 'type' => 'text', 'div' => 'div_form'));
echo $this->Form->input('email', array('label' => 'Email', 'type' => 'email', 'div' => 'div_form'));
echo $this->Form->input('tel', array('label' => 'Telefono', 'type' => 'text', 'div' => 'div_form'));
echo $this->Form->input('msg', array('label' => 'Comentarios', 'type' => 'textarea', 'div' => 'div_form'));
echo $this->Form->end('Enviar');
?>