<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<div class="container-fluid">
<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal')); ?>
<fieldset class="row">
<legend class="span8">
    Forgot Password
</legend>

<div class="control-group">
    <?php echo form_label($login_label, $login['id'], array('class' => 'control-label')); ?>
    <div class="controls">
        <div class="row">
            <div class="span3">
            <?php echo form_input($login); ?>
            </div>
            <div class="span3 text-error">
            <?php echo form_error($login['name']); ?>
            <?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="span3 offset2">
        <?php echo form_submit('reset', 'Get a new password', 'class = "btn btn-large btn-success"'); ?>
    </div>
</div>
<?php echo form_close(); ?>
</fieldset>
</div>