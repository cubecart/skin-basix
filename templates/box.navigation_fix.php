{*
 * Basix skin for CubeCart v6
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2026. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Originally created by NiteFox (NiteTower Design) and
 * transferred to CubeCart Limited in 2022.
 * ========================================
 * Web:   https://www.cubecart.com
 * Email:  hello@cubecart.com
 * License:  GPL-3.0 https://www.gnu.org/licenses/quick-guide-gplv3.html
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