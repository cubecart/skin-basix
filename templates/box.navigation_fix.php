{*
 * Basix CubeCart Template
 * ========================================
 * Basix is a template developed by NiteFox 
 * also known as NiteTower Design.
 * ========================================
 * Web:        https://www.facebook.com/CubeCartThemes
 * Email:      nitetowerdesign@gmail.com
 * License:    http://nitefox.x10host.com/license.html
 * Disclaimer: http://nitefox.x10host.com/disclaimer.html
 *}

<nav class="navbar site-navbar">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sitenav-navbar-collapse-1" aria-expanded="false">
			<i class="fas fa-bars"></i>
		</button>
			
		<button class="hidden-sm hidden-md hidden-lg searchbar-toggle" type="button" data-toggle="collapse" data-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
			<i class="fas fa-search"></i>
		</button>
	</div>

	<div class="collapse navbar-collapse" id="sitenav-navbar-collapse-1">
	
		{include file='templates/box.navigation.php'}
		
		<ul class="nav navbar-nav navbar-right account-nav">
			{include file='templates/box.session.php'}
		</ul>
	
	</div>

</nav>