<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        Mind Blowing
    </title>
    <?php
        echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('custom.css');
 
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
         <style>
        body {
          padding-top: 50px;
        }
    </style>
</head>
<body>
    <?php echo $this->element('navigation');?>
	
    <div class="container body">
		<strong><?php echo $this->Session->flash(); ?></strong>
	<?php echo $this->fetch('content'); ?>
       
      <hr>
             
    </div> <!-- /container -->    
     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min.js'); ?>
	<?php echo $this->element('footer');?> 
		
</body>
</html>