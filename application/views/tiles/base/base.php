<!doctype html>
<html lang="en">

<head>
    <title><?php echo $title;?></title>
    <meta name="keywords" content="<?php echo $meta_keywords; ?>" />
    <meta name="description" content="<?php echo $meta_description; ?>" />
    <meta name="author" content="<?php echo $meta_author; ?>" />
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.9.1.js" ></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" type="text/css" />
</head>

<body>
    <div id="wrap">
        <div class="container">
            <div class="container">
                <?php echo $header;?>
            </div>

            <div class="container">
                <?php echo $navigation; ?>
            </div>

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php echo $content;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="push"></div>
    </div>
    <div id="footer">
        <div class="container">
            <?php echo $footer;?>
        </div>
    </div>
</body>

</html>
