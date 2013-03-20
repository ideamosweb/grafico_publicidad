<div id="banner_top">
	<div class="logo">
		<img src="img/logo.png" />
	</div>		
</div>
<div id="main_menu">
	<ul id="tabs">
		<li class="first_tab"><?php echo $this->html->link('INICIO', array('controller' => 'index', 'action' => 'index')) ?></li>
		<li class="second_tab"><?php echo $this->html->link('PRODUCTOS', array('controller' => 'productos', 'action' => 'index')) ?></li>
		<li class="third_tab"><a href="#">CLIENTES</a></li>
		<li class="four_tab last_tab"><a href="#">CONTACTENOS</a></li>
	</ul>
</div>