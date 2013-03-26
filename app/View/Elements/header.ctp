<div id="banner_top">	
	<object width="980" height="141" data="<?php echo FULL_BASE_URL.'/grafico_publicidad/'.IMAGES_URL ?>animacion_banner.swf"></object>		
</div>
<div id="main_menu">
	<ul id="tabs">
		<li class="first_tab"><?php echo $this->html->link('INICIO', array('controller' => 'index', 'action' => 'index')) ?></li>
		<li class="second_tab"><?php echo $this->html->link('PRODUCTOS', array('controller' => 'productos', 'action' => 'index')) ?></li>
		<li class="third_tab"><?php echo $this->html->link('CLIENTES', array('controller' => 'clientes', 'action' => 'index')) ?></li>
		<li class="four_tab last_tab"><?php echo $this->html->link('CONTACTENOS', array('controller' => 'contactos', 'action' => 'index')) ?></li>
	</ul>
</div>