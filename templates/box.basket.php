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
{if !$CATALOGUE_MODE}
	<div class="dropdown">
		<a href="#" class="navbasket-btn dropdown-toggle" type="button" id="basket_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			<span class="hidden-xs"><i class="fas fa-shopping-basket"></i> {$CART_TOTAL}</span>
			<span class="hidden-sm hidden-md hidden-lg"><i class="fas fa-shopping-basket"></i> {$CART_ITEMS}</span>
			<span class="caret"></span>
		</a>
		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="basket_dropdown">
			{include file='templates/box.basket.content.php'}
		</div>
		<div class="session_token hidden">{$SESSION_TOKEN}</div>
	</div>
{/if}