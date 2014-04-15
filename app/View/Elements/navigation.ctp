<div class="navbar navbar-default navbar-fixed-top" role="navigation">

	<div class= "container">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
         data-target="#example-navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <?php echo $this->Html->link(__('Mind Blowing'),'/',array('class'=>'navbar-brand'));?>
   </div>
   <div class="collapse navbar-collapse" id="example-navbar-collapse">
      <ul class="nav navbar-nav">
         <li class="active"><?php echo $this->Html->link('Home',array('controller' => 'posts', 'action' => 'index')); ?></li>
		 <li><?php echo $this->Html->link('Add Post',array('controller' => 'posts', 'action' => 'add')); ?></li>
         <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Members <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<li><?php echo $this->Html->link('View All Members',array('controller' => 'users', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link('Register',array('controller' => 'users', 'action' => 'add')); ?></li>
				</ul>	
			
		 </li>
	  </ul>
	  <ul class = "nav pull-right">
	  
		<ul class="nav navbar-nav navbar-right">
			<?php if ($logged_in): ?>
            <?php //if(!$this->Session->check('Auth.User')):?>
			Welcome <?php echo $current_user['username']; ?>.
            <?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?>
            <?php else: ?>
	  
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				Actions<?php echo $this->Session->read(__('Action'),'Auth.User.username');?> 
				<b class="caret"></b></a>               
            </a>
            <ul class="dropdown-menu">
               <li>
                    <?php echo $this->Html->link('Register', array('controller'=>'users', 'action'=>'add')); ?> 
               </li>
                 <li>
                    <?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?>
                 </li>
               <li class="divider"></li>
			   <li><?php echo $this->Html->link('View Members',array('controller' => 'users', 'action' => 'index')); ?></li>
			   <li><?php echo $this->Html->link('View Posts List',array('controller' => 'posts', 'action' => 'index')); ?></li>
               
               <li class="divider"></li>
               <li><?php echo $this->Html->link('Add Post',array('controller' => 'posts', 'action' => 'add')); ?></li>
            </ul>
         </li>
		 <?php endif;?>
      </ul>
   </div>
   </div>

</div>
