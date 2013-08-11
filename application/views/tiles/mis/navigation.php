<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="<?php echo base_url(); ?>">VRE</a>

            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
                <ul class="nav">
                    <li><a href="<?php echo base_url(); ?>mis">Products</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Accounts</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Join Us<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>auth">Login</a><li>
                            <li><a href="<?php echo base_url(); ?>auth/register">Register</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-search pull-right">
                  <input type="text" class="search-query" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>