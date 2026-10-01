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

{if $CATEGORIES}
	{$CATEGORIES}
{else}
	<ul class="nav navbar-nav">
		<li>
			<a href="#" class="nav-cat-link dropdown-toggle" type="button" data-toggle="dropdown">
				<i class="fas fa-bars"></i> {$LANG.navigation.title}
			</a>
			<ul class="dropdown-menu main-cats">
				{$NAVIGATION_TREE}
			</ul>
		</li>	
		<li><a href="{$STORE_URL}/search{$CONFIG.seo_ext}" data-level="1"><i class="fas fa-search"></i> {$LANG.search.advanced}</a></li>
		{if $CTRL_CERTIFICATES && !$CATALOGUE_MODE}
			<li><a href="{$URL.certificates}" data-level="1" title="{$LANG.navigation.giftcerts}"><i class="fas fa-gift"></i> {$LANG.navigation.giftcerts}</a></li>
		{/if}
		{if $CTRL_SALE}
			<li><a class="sale-link" href="{$URL.saleitems}" data-level="1" title="{$LANG.navigation.saleitems}"><i class="fas fa-tag"></i> {$LANG.navigation.saleitems}</a></li>
		{/if}
	</ul>	
{/if}