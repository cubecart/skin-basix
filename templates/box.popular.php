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

{if $POPULAR}
	<div class="panel panel-basix" id="box-popular">
		<div class="panel-heading"><i class="fas fa-fire"></i> {$LANG.catalogue.title_popular}</div>
		<ul class="list-group productbox-list">
			{foreach from=$POPULAR item=product}
				<li class="list-group-item">
					<div class="product-name">
					<a href="{$product.url}" title="{$product.name}">{$product.name}</a>
					</div>
					<div class="product-price">
					{if $product.ctrl_sale}
						
						<span class="old-price">{$product.price}</span> <span class="current-price">{$product.sale_price}</span>
						
					{else}
						<span class="current-price">{$product.price}</span>
					{/if}
					</div>
				</li>
			{/foreach}
		</ul>
	</div>
{/if}