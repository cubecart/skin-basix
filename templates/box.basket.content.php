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

{if isset($CONTENTS) && count($CONTENTS) > 0}
	<div class="shopping-cart" id="basket-detail">
		<ul class="shopping-cart-items list-unstyled">
			{foreach from=$CONTENTS item=item name=items}
				{if $smarty.foreach.items.index == 5}
					<li><div class="text-center">&hellip;</div></li>
					{break}
				{/if}
				<li class="clearfix">
					<span class="item-name"><a href="{$item.link}" title="{$item.name}">{$item.name|truncate:35:"&hellip;"}</a></span>
					<span class="item-price">{$item.total}</span>
					<span class="item-quantity"> &times; {$item.quantity}</span>
				</li>
			{/foreach}
		</ul>
		<div class="shopping-cart-sum">
			{$LANG.common.item_plural}: <span class="badge">{$CART_ITEMS}</span>
			<div class="shopping-cart-total">
				<span class="lighter-text">{$LANG.basket.total}:</span>
				<span class="main-color-text">{$CART_TOTAL}</span>
			</div>
		</div>
		<a href="{$STORE_URL}/index.php?_a=checkout" class="btn btn-success btn-block">
			{if $CONFIG.ssl == 1}
				<i class="fas fa-lock"></i> {$LANG.basket.basket_secure_checkout}
			{else}
				 {$LANG.basket.basket_checkout}
			{/if}
		</a>
		{if !$IS_USER}
			<a href="{$STORE_URL}/index.php?_a=basket" class="btn btn-default btn-block">{$LANG.basket.view_basket}</a>
		{/if}
	</div>
{else}
	<p class="basket-empty text-center">{$LANG.basket.basket_is_empty}</p>
{/if}