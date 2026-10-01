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