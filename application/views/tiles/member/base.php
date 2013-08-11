<!doctype html>
<html lang="en">

<head>
	<title><?php echo $title;?></title>
	<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
	<meta name="description" content="<?php echo $meta_description; ?>" />
	<meta name="author" content="<?php echo $meta_author; ?>" />
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery/1.9.1.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery/pepper-grinder/jquery-ui-1.10.3.custom.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/init.js" ></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/pepper-grinder/jquery-ui-1.10.3.custom.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/text.css" type="text/css" />
</head>

<body>

<div id="page">

	<div id="header">
		<?php echo $header;?>
	</div>

	<div id="content">	
		<?php echo $content;?>
	</div>

	<div id="footer">
		<?php echo $footer;?>
	</div>

</div>

</body>

</html>
