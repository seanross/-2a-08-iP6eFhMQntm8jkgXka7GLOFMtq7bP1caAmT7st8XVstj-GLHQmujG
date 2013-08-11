<div class="container-fluid">
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datepicker.js" ></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/datepicker.css" type="text/css" />
<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$fname = array(
	'name'	=> 'fname',
	'id'	=> 'fname',
	'value'	=> set_value('fname'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$mname = array(
	'name'	=> 'mname',
	'id'	=> 'mname',
	'value'	=> set_value('mname'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$lname = array(
	'name'	=> 'lname',
	'id'	=> 'lname',
	'value'	=> set_value('lname'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$address = array(
	'name'	=> 'address',
	'id'	=> 'address',
	'value'	=> set_value('address'),
	'rows'	=> 5,
	'cols'	=> 5,
);
$bdate = array(
	'name'	=> 'bdate',
	'id'	=> 'bdate',
	'value'	=> set_value('bdate'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$gender = array(
	'name'	=> 'gender',
	'id'	=> 'gender',
	'value'	=> set_value('gender'),
	'maxlength'	=> 10,
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal')); ?>
<fieldset class="row">
    <legend class="span8">
        Registration of Account
    </legend>
    <?php if ($use_username) { ?>
    <div class="control-group">
    <?php echo form_label('Username', $username['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <?php echo form_input($username); ?>
                    </div>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($username['name']); ?>
                    <?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
	
    <div class="control-group">
        <?php echo form_label('Email Address', $email['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <?php echo form_input($email); ?>
                    </div>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($email['name']); ?>
                    <?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo form_label('Password', $password['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <?php echo form_password($password); ?>
                    </div>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($password['name']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="control-group">
        <?php echo form_label('Confirm Password', $confirm_password['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <?php echo form_password($confirm_password); ?>
                    </div>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($confirm_password['name']); ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo form_label('First Name', $fname['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <?php echo form_input($fname); ?>
                    </div>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($fname['name']); ?>
                    <?php echo isset($errors[$fname['name']])?$errors[$fname['name']]:''; ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo form_label('Middle Name', $mname['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <div class="input-prepend">
                    <span class="add-on"><i class=""></i></span>
                    <?php echo form_input($mname); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo form_label('Last Name', $lname['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <?php echo form_input($lname); ?>
                    </div>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($lname['name']); ?>
                    <?php echo isset($errors[$lname['name']])?$errors[$lname['name']]:''; ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo form_label('Birthdate', $bdate['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <script type="text/javascript"> $(function(){ $('#bdatepicker').datepicker(); });</script>
                <div class="span3 input-append date" id="bdatepicker" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                   <input class="span2" name="bdate" id="bdate" size="16" type="text" value="12-02-2012">
                   <span class="add-on"><i class="icon-th"></i></span>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($bdate['name']); ?>
                    <?php echo isset($errors[$bdate['name']])?$errors[$bdate['name']]:''; ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="control-group">
        <?php echo form_label('Gender', $gender['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <select name="gender" id="gender">
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="control-group">
        <?php echo form_label('Address', $address['id'], array('class' => 'control-label')); ?>
        <div class="controls">
            <div class="row">
                <div class="span3">
                    <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <?php echo form_textarea($address); ?>
                    </div>
                </div>
                <div class="span3 text-error">
                    <?php echo form_error($address['name']); ?>
                    <?php echo isset($errors[$address['name']])?$errors[$address['name']]:''; ?>
                </div>
            </div>
        </div>
    </div>
    
	<?php if ($captcha_registration) {
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
                            <div class="input-prepend">
                            <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                            <?php echo form_input($captcha); ?>
                            </div>
                        </div>
                        <div class="span3 text-error">
                            <?php echo form_error($captcha['name']); ?>
                        </div>
                    </div>
                </div>
            </div>
	<?php }
	} ?>
    <div class="row">
        <div class="span3 offset2">
            <?php echo form_submit('register', 'Register', 'class = "waitdisable btn btn-large btn-primary"'); ?>
            <img src="<?php echo base_url(); ?>img/wait.gif" class="sendingAlert"/>
        </div>
        <div class="alert span3 sendingAlert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Processing your request.</strong> Please wait for a while.
        </div>
    </div>
    
</fieldset>    
<?php echo form_close(); ?>
</div>

<script>
$(function(){
    $('.sendingAlert').hide();
    $(".waitdisable").click(function(){
        $('.sendingAlert').show('fade');
        $(this).prop("disabled", true);
    });
});
</script>