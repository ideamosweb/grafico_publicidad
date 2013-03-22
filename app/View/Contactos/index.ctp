<!-- meta tags !-->
<!-- end meta tags !-->

<!-- css styles !-->
<!-- end css styles !-->

<!-- scripts JS !-->
<div class="contact-form">
<?php 
echo $this->Form->create(false, array('action' => 'process', 'default' => false));
echo $this->Form->input('name', array('label' => 'Nombre', 'type' => 'text', 'div' => 'row field_text', 'class' => 'inputtext input_middle required'));
echo $this->Form->input('email', array('label' => 'Email', 'type' => 'text', 'div' => 'row field_text', 'class' => 'inputtext input_middle required'));
?>
<div class="clear"></div>
<?php
echo $this->Form->input('tel', array('label' => 'Telefono', 'type' => 'text', 'div' => 'row field_text', 'class' => 'inputtext input_middle required'));
echo $this->Form->input('city', array('label' => 'Ciudad', 'type' => 'text', 'div' => 'row field_text', 'class' => 'inputtext input_middle required'));
?>
<div class="clear"></div>
<?php
echo $this->Form->input('msg', array('label' => 'Comentarios', 'type' => 'textarea', 'div' => 'row field_textarea', 'class' => 'textarea textarea_middle required', 'rows' => 10, 'cols' => 40));
?>
<div class="clear"></div>
<?php
echo $this->Form->input('Enviar', array('label' => false, 'type' => 'submit', 'div' => 'row field_submit', 'class' => 'contact-submit submit'));
echo $this->Form->end();
?>
</div>