<!-- File: /app/View/Users/index.ctp -->
<div class ="users index">
	
	<div class="row">
		<div class="col-lg-2"></div>
        <div class="col-lg-8">
			<table class="table">
				<thead><h1>Members List</h1>	
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Username</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<!-- Here's where we loop through our $posts array, printing out post info -->
					<?php foreach ($users as $user): ?>
						<tr class="success">
							<td><?php echo ('<h5>'.$user['User']['id'].'</h5>');?></td>
							<td><?php echo $user['User']['name']; ?></td>
							<td><?php echo $user['User']['username']; ?></td>
							<td><?php echo $user['User']['email']; ?></td>
							<td>
								<?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?>&nbsp;&nbsp;                            
								<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>&nbsp;&nbsp;
								<?php echo $this->Form->postLink('Delete', array('action' => 'delete', 
								$user['User']['id']), array('confirm' => 'Are you sure?'));?>
							</td>
						</tr>
					<?php endforeach ;?>
				</tbody>
			</table>
		</div>	
		<div class="col-lg-2"></div>
		
	</div>
</div>

