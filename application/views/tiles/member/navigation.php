<li id="link1"><a href="<?php echo base_url(); ?>" class="style3"><span class="style11">Home</span></a></li>
<li id="link2"><a href="<?php echo base_url(); ?>member/profile" class="style7"><span class="style11">My Cart</span></a></li>
<li id="link3"><a href="<?php echo base_url(); ?>gallery" class="style12"><span class="style11">Products</span></a></li>
<li id="link4"><a href="<?php echo base_url(); ?>member/transactions" class="style12"><span class="style11">Orders</a></li>
<li id="link5"><a href="<?php echo base_url(); ?>forum" class="style12"><span class="style11">FAQ</a></li>
<li id="link6"><a href="<?php echo base_url(); ?>home/aboutus" class="style12"><span class="style11">About Us</a></li>
<?php if(!$this->tank_auth->is_logged_in()): ?>
  <li id="link7"><a href="<?php echo base_url(); ?>auth/login" class="style12"><span class="style11">Log-in</a></li>
<?php else: ?>
  <li id="link7"><a href="<?php echo base_url(); ?>auth/logout" class="style12"><span class="style11">Log-out</a></li>
<?php endif; ?>