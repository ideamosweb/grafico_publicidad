<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');

		echo $this->Html->css(array('reset', 'styles'));				
		echo $this->fetch('css');

		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js');		
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="wrapper">
		<div id="wrapper_content">
			<div id="header">
				<?php echo $this->element('header'); ?>
			</div>
			<?php echo $this->fetch('slider'); ?>
			<div id="content">
				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>
			</div>			
		</div>
	</div>
	<?php echo $this->fetch('scriptBottom'); ?>	
</body>
</html>
