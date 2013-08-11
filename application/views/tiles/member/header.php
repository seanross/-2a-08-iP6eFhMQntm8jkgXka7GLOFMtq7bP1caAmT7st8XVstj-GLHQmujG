<a href="<?php echo base_url(); ?>" id="logo"><img src="<?php echo base_url(); ?>images/eBags.png" alt=""/></a>
<ul>
	<li class="first">
	<h2 class="style3">Live</h2>
	<span class="style3">Have fun in your visit..</span></li>
	<li>
	<h2 class="style3">Love</h2>
	<span class="style3">Get your style..</span></li>
	<li>
	<h2 class="style3">Shop</h2>
	<span class="style3">Enjoy shopping..</span></li>
</ul>
<?php if(!$this->tank_auth->is_role('user')): ?>
<a href="<?php echo base_url(); ?>auth/register"><span class="style3">Sign-up now!</span></a>
<?php else: ?>
<a href="<?php echo base_url(); ?>"><span class="style3">Hi <?php echo $this->tank_auth->get_username(); ?></span></a>
<?php endif; ?>
<ul id="navigation">
	<?php echo $navigation;?>
</ul>
<img src="<?php echo base_url(); ?>images/slider.gif" alt="figure" width="594" height="344"/>
<div>
	<h1 class="style7"><span class="style3">..WELCOME!! </span></h1>
	<p align="left">
		<span class="style3"> Hottest Bags for Girly Stuffs! <span class="style18">Prada|Converse|JanSport|Loius Vitton|Michael Kors|Tignanello|Adidas</span></span>
	</p>
</div>