<div class="users view">
	
	<div class= "row">
		<div class="col-lg-1">
		</div>
		<div class="col-lg-8">
			<h2>Members Information and Posts Data</h2>
			<dl>
				<dt><?php echo __('Name'); ?></dt>
				<dd><?php echo h($user['User']['name']); ?> &nbsp;</dd>
				
				<dt><?php echo __('Username'); ?></dt>
				<dd><?php echo h($user['User']['username']); ?>&nbsp;</dd>
				
				<dt><?php echo __('Email'); ?></dt>
				<dd><?php echo h($user['User']['email']); ?>&nbsp;</dd>
				
				<dt><?php echo __('# of Posts '); ?></dt>
				<dd><?php echo __(count($user['Post'])); ?></dd>
				
				<dt><?php echo __('Posts Titles'); ?></dt>
				<dd ><?php for ($x= 0; $x< count($user['Post']); $x++){
						echo $this->Html->link(($user['Post'][$x]['title']),
						array('controller'=> 'Posts','action' => 'view', $user['Post'][$x]['id']));
						echo __("<br />");
						echo __('Created '.h($user['Post'][$x]['created']));
						
						echo __("</br><br />" );
					}
					?>
				</dd>
			</dl><br />
			<table>				
				<tr>
					<td class ="btn btn-info">
						<?php echo $this->Html->link('Back', array('controller' => 'posts', 'action' => 'index')); ?>
					</td>
				</tr>
			</table>		
		</div>
		<div class="col-lg-3">
		</div>
		<div class="pull-right"><?php //echo $this->element('pagination'); ?></div>
	</div>
</div>

