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