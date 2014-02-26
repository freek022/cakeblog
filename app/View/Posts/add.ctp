<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>
<?php
// creates the form
echo $this->Form->create('Post');
//
echo $this->Form->input('title');
//creates the text area
echo $this->Form->input('body', array('rows' => '3'));
//saves the form
echo $this->Form->end('Save Post');
?>