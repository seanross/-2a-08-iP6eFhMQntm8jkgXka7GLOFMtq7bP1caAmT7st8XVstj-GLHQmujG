<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
);
?>
<div class="container-fluid">
<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal')); ?>
<fieldset class="row">
<legend class="span8">
    Change Password
</legend>
    <div class="control-group">
    <?php echo form_label('Old Password', $old_password['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <?php echo form_password($old_password); ?>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($old_password['name']); ?>
                    <?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="control-group">
    <?php echo form_label('New Password', $new_password['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <?php echo form_password($new_password); ?>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($new_password['name']); ?>
                    <?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="control-group">
    <?php echo form_label('Confirm New Password', $confirm_new_password['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <?php echo form_password($confirm_new_password); ?>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($confirm_new_password['name']); ?>
                    <?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span3 offset2">
            <?php echo form_submit('change', 'Change Password', 'class = "btn btn-large btn-success"'); ?>
        </div>
    </div>
</fieldset>
<?php echo form_close(); ?>
</div>