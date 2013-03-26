<!-- meta tags !-->
<!-- end meta tags !-->

<!-- css styles !-->
<!-- end css styles !-->

<!-- scripts JS !-->
<div class='content_contact'>
	<?php echo $this->Html->image('logo_contacto.png', array('alt' => 'Logo', 'class' => 'center_block')) ?>
	<br />
	<br />
	<br />
	<p>Calle 41 No. 43 - 70 Local 8  Tel: 379 5243</p>
	<p>Cel: 316 4619714  E-mail: info@graficopublicidad.com.co</p>
	<p>www.graficopublicidad.com.co</p>
	<p>Barranquilla - Colombia</p>	
	<div class="link_network">				
		<?php echo $this->Html->image('facebook_icon2.png', array('alt' => 'Siguenos en facebook')) ?>
		<a href="">facebook/graficopublicidad</a>
	</div>	
</div>	
<div class="contact-form">
<?php 
echo $this->Form->create('Contacto', array('action' => 'process'));
echo $this->Form->input('name', array('label' => 'Nombre (*)', 'type' => 'text', 'div' => 'row field_text', 'class' => 'inputtext input_middle required'));
echo $this->Form->input('email', array('label' => 'Email (*)', 'type' => 'email', 'div' => 'row field_text', 'class' => 'inputtext input_middle required'));
?>
<div class="clear"></div>
<?php
echo $this->Form->input('tel', array('label' => 'Telefono (*)', 'type' => 'text', 'div' => 'row field_text', 'class' => 'inputtext input_middle required'));
echo $this->Form->input('city', array('label' => 'Ciudad (*)', 'type' => 'text', 'div' => 'row field_text', 'class' => 'inputtext input_middle required'));
?>
<div class="clear"></div>
<?php
echo $this->Form->input('msg', array('label' => 'Comentarios (*)', 'type' => 'textarea', 'div' => 'row field_textarea', 'class' => 'textarea textarea_middle required', 'rows' => 10, 'cols' => 40));
?>
<div class="clear"></div>
<?php
echo $this->Form->input('Enviar', array('label' => false, 'type' => 'submit', 'div' => 'row field_submit', 'class' => 'contact-submit submit'));
echo $this->Form->end();
?>
<div class="clear"></div>
</div>