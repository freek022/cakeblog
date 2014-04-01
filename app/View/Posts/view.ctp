<!-- File: /app/View/Posts/view.ctp -->
<div class= "row">
	<div class="col-lg-1">
	</div>
	<div class="col-lg-8">	
		<table>
			<tr>
				<td>
					<h1><?php echo h($post['Post']['title']); ?></h1>

					<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

					<p><?php echo h($post['Post']['body']); ?></p>
				</td>
			</tr>
			<tr>
				<td class ="btn btn-info">
					<?php echo $this->Html->link('Back', array('controller' => 'posts', 'action' => 'index')); ?>
				</td>									
			</tr>
		</table>
	
	</div>
	<div class="col-lg-3">
	</div>
</div>

