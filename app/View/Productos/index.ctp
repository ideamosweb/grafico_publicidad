<!-- meta tags !-->
<?php //echo $this->html->meta('diseño, paginas, web, diseno, barranquilla, diseño web, desarrollo, webs, colombia, pagina, una, cuanto, precio, precios, economico', array('inline' => false)); ?>
<!-- end meta tags !-->

<!-- css styles !-->
<?php //echo $this->Html->css('skin', null, array('inline' => false)); ?>
<!-- end css styles !-->

<!-- scripts JS !-->
<?php //echo $this->Html->script('jquery.jcarousel', array('inline' => false)); ?>
<!-- end scripts JS !-->
<br />
<br />
<h1 class="white align_center">Los proyectos y servicios que la empresa ofrece se enmarcan en:</h1>
<br />

<table class="product_table" cellpadding="10px" cellspacing="20px">
	<tr>
		<td><?php echo $this->Html->link($this->Html->image('litografia_papeleria.png', array('alt' => 'Litografia papeleria')), array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'lito_pap')); ?></td>
		<td><?php echo $this->Html->link($this->Html->image('tarjeteria_social.png', array('alt' => 'Tarjeteria social')), array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'tarj_social')); ?></td>
		<td><?php echo $this->Html->link($this->Html->image('impresion_digital.png', array('alt' => 'Impresion digital')), array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'imp_digi')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Html->link($this->Html->image('senalizacion.png', array('alt' => 'Senalizacion')), array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'sena')); ?></td>
		<td><?php echo $this->Html->link($this->Html->image('pop.png', array('alt' => 'POP')), array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'pop')); ?></td>
		<td><?php echo $this->Html->link($this->Html->image('diseno_web.png', array('alt' => 'Diseno web')), array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'dis_web')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Html->link($this->Html->image('diseno_corporativa.png', array('alt' => 'Diseno corporativa')), array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'dis_corp')); ?></td>
		<td><?php echo $this->Html->link($this->Html->image('publicidad_aerea.png', array('alt' => 'Publicidad aerea')), array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'pub_aerea')); ?></td>
		<td></td>
	</tr>
</table>