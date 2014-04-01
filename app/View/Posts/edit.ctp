<!-- File: /app/View/Posts/edit.ctp -->
<div class ="row">
<div class="col-lg-6 col-lg-offset-3">
        <h2>Edit Your Post</h2>
		
        <div class="well">            
            <?php echo $this->Form->create('Post',array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false)));?>
			
            <div class="form-group">
				<legend><?php //echo __('Please enter your username and password'); ?></legend>
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('title',array('class'=>'form-control'));?>
				</div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Body</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('body',array('class'=>'form-control', 'rows'=>'3'));?>
                </div>
            </div>
			
			<div class="form-group">
                <!--<label for="inputPassword3" class="col-sm-2 control-label">Body</label>-->
                <div class="col-sm-10">
                    <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
                </div>
            </div>
			
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
					<?php echo $this->Form->submit('Save Post',array('class'=>'btn btn-primary'))?>
                </div>
            </div>
            <?php echo $this->Form->end();?>
        </div>
    </div>

</div>


<?php
//echo $this->Form->create('Post');
//echo $this->Form->input('title');
//echo $this->Form->input('body', array('rows' => '3'));
//echo $this->Form->input('id', array('type' => 'hidden'));
//echo $this->Form->end('Save Post');
?>