<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg"><i class="ti ti-menu"></i></span>
			</a>
		</span>
		<a class="-brand" href="dashboard.php"><h3 style="color:white; text-shadow:2px 2px 6px black;"><b>VIKAS MOBILE SHOP <?php //echo var_dump($_SESSION); ?></b></h3></a>
	</div><!-- logo-area -->
	<ul class="nav navbar-nav toolbar pull-right">
		<li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen">
            	<span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i>
            </a>
        </li>
       	<li class="dropdown toolbar-icon-bg">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<img class="img-circle" src="demo/avatar/avatar_01.png"/>
			</a>
			<ul class="dropdown-menu userinfo arrow">
				<li>
					<a href="change_password.php">
						<i class="ti ti-panel"></i><span>Change Password</span>
					</a>
				</li>
				<li class="divider"></li>
				<li><a href="logout.php"><i class="fa fa-power-off"></i><span>Sign Out</span></a></li>
			</ul>
		</li>
	</ul>
</header>