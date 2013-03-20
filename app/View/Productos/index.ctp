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
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'lito_pap pr_imgs')); ?></td>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'tarj_social pr_imgs')); ?></td>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'imp_digi pr_imgs')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'sena pr_imgs')); ?></td>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'pop pr_imgs')); ?></td>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'dis_web pr_imgs')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'dis_corp pr_imgs')); ?></td>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show'), array('escape' => false, 'class' => 'pub_aerea pr_imgs')); ?></td>
		<td></td>
	</tr>
</table>