<?php
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
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
        <?php echo form_label('Password', $password['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <?php echo form_password($password); ?>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($password['name']); ?>
                    <?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>     
                </div>
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="span3 offset2">
            <?php echo form_submit('cancel', 'Delete Account', 'class = "btn btn-large btn-success"'); ?>
        </div>
    </div>
    </fieldset>
<?php echo form_close(); ?>
</div>