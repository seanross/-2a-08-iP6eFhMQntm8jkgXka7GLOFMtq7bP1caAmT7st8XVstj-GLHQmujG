<div class="container-fluid">
<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal') ); ?>
<fieldset class="row">
    <legend class="span8">
        Login Details
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

    <div class="control-group">
        <?php echo form_label('Password', $password['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <?php echo form_password($password); ?>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($password['name']); ?>
                    <?php echo isset($errors[$password['name']])?'<span class="label label-important">' + $errors[$password['name']] + '</span>':''; ?>
                </div>
            </div>
        </div>
    </div>

	<?php if ($show_captcha) {
		if ($use_recaptcha) { ?>
	
                <div id="recaptcha_image"></div>
                <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
                <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
                <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>

                <div class="recaptcha_only_if_image">Enter the words above</div>
                <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
		<?php echo form_error('recaptcha_response_field'); ?>
		<?php echo $recaptcha_html; ?>
	
	<?php } else { ?>
            
            <div class="control-group">
                <div class="controls">
                    <p>Enter the code exactly as it appears:</p>
                    <?php echo $captcha_html; ?>
                    <?php echo form_label('Confirmation Code', $captcha['id']); ?>
                </div>
                <div class="controls">
                    <div class="row">
                        <div class="span3">
                            <?php echo form_input($captcha); ?>
                        </div>
                        <div class="span3 text-error">
                            <?php echo form_error($captcha['name']); ?>
                        </div>
                    </div>
                </div>
            </div>
	<?php }
	} ?>
     <div class="control-group">
        <div class="controls">
        <div class="row">
            <div class="span7">
                <?php echo form_checkbox($remember); ?> Remember Me <br/>
            </div>
            <div class="span7">
                <?php echo anchor('/auth/forgot_password/', 'I forgot my password', 'class = "muted"'); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                <?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register' , 'class = "btn btn-primary"'); ?>        
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="span3 offset2">
            <?php echo form_submit('submit', 'Log In', 'class = "btn btn-large btn-success"'); ?>
        </div>
    </div>
</fieldset>
<?php echo form_close(); ?>
</div>