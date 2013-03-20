<!-- meta tags !-->
<!-- end meta tags !-->

<!-- css styles !-->
<!-- end css styles !-->

<!-- scripts JS !-->
<?php echo $this->Html->script('http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.74.js', array('inline' => false)); ?>
<?php echo $this->Html->script('cicle-functions', array('block' => 'scriptBottom')); ?>
<!-- end scripts JS !-->
<br />
<br />
<h1 class="white align_center">Los proyectos y servicios que la empresa ofrece se enmarcan en:</h1>
<br />

<table class="product_table" cellpadding="10px" cellspacing="20px">
	<tr>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show', 1), array('escape' => false, 'class' => 'lito_pap pr_imgs')); ?></td>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show', 2), array('escape' => false, 'class' => 'tarj_social pr_imgs')); ?></td>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show', 3), array('escape' => false, 'class' => 'imp_digi pr_imgs')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show', 4), array('escape' => false, 'class' => 'sena pr_imgs')); ?></td>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show', 5), array('escape' => false, 'class' => 'pop pr_imgs')); ?></td>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show', 6), array('escape' => false, 'class' => 'dis_web pr_imgs')); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show', 7), array('escape' => false, 'class' => 'dis_corp pr_imgs')); ?></td>
		<td><?php echo $this->Html->link('', array('controller' => 'productos', 'action' => 'show', 8), array('escape' => false, 'class' => 'pub_aerea pr_imgs')); ?></td>
		<td></td>
	</tr>
</table>
<div class='overflow'>
	<div id="cicle_imgs" class="slideshow left"> 
	    <?php
	    for ($i=0; $i < count($img_cicle); $i++) {
	    	echo $this->Html->image($img_cicle[$i], array('alt' => 'imgs'));
	    }
	    ?>
	</div>
	<div class='content_monster right'>
		<?php echo $this->Html->image('Lambonny2.gif', array('alt' => 'Lambonny')) ?>
	</div>
</div>