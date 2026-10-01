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