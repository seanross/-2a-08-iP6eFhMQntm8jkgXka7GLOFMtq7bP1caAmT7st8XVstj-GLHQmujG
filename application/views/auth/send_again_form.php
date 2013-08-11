<?php
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
?>
<div class="container-fluid">
<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal')); ?>
    <fieldset class="row">
    <legend class="span8">
        Send Again
    </legend>
        
    <div class="control-group">
        <?php echo form_label('Email Address', $email['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <?php echo form_input($email); ?>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($email['name']); ?>
                    <?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>        
                </div>
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="span3 offset2">
            <?php echo form_submit('send', 'Send', 'class = "btn btn-large btn-success"'); ?>
        </div>
    </div>
    </fieldset>
<?php echo form_close(); ?>
</div>