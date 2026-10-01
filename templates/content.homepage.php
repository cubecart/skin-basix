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

{if isset($DOCUMENT)}
	<div id="content_homepage">
		{if $DOCUMENT.hide_title==0}<h1 class="content-title">{$DOCUMENT.title}</h1>{/if}
		{$DOCUMENT.content}
	</div>
	
	<br>
{/if}

{* Homepage product sections. Core (Cubecart::displayHomePage) assigns
   $HOMEPAGE_SECTIONS from the store settings; with none configured it holds a
   single Latest Products section built from the same list $LATEST_PRODUCTS
   still carries, so this renders as it always did until a merchant asks for
   more. The first section keeps the id content_latest_products. *}
{foreach from=$HOMEPAGE_SECTIONS item=section name=sections}
	<div id="{if $smarty.foreach.sections.first}content_latest_products{else}content_products_{$smarty.foreach.sections.iteration}{/if}" class="panel panel-basix">
		<div class="panel-heading">{$section.heading}{if $section.url} <a href="{$section.url}" class="section-view-all">{$LANG.common.view_all}</a>{/if}</div>
		
		<div class="panel-body">
			<div class="row">
				{foreach from=$section.products item=product}
				
					<div class="product-box">
						<div class="inner">
						<div class="product-wrap">
							<div class="photo-wrap">
								<a class="th" href="{$product.url}" title="{$product.name}">
									<img class="thmb" src="{$product.image}" alt="{$product.name}">
								</a>
								{if $product.review_score && $CTRL_REVIEW}
								<div class="rating">
									{for $i = 1; $i <= 5; $i++}
										{if $product.review_score >= $i}
											<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star.png" alt="">
										{elseif $product.review_score > ($i - 1) && $product.review_score < $i}
											<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_half.png" alt="">
										{else}
											<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_off.png" alt="">
										{/if}
									{/for} 
								</div>
								{/if}
							</div>
							<div class="product-name">
								<a href="{$product.url}" title="{$product.name}">{$product.name|truncate:28:"..."}</a>
							</div>
							<div class="product-price">
								{if $product.ctrl_sale}
									<div class="price-group">
										<span class="old-price">{$product.price}</span> <span class="current-price">{$product.sale_price}</span>
									</div>
								{else}
									<span class="current-price">{$product.price}</span>
								{/if}
							</div>

							<form action="{$VAL_SELF}" method="post" class="add_to_basket">
								{if $product.available <= 0}
									<button type="submit" value="{$LANG.common.unavailable}" title="{$LANG.common.unavailable}" class="btn btn-default btn-block disabled postfix" disabled><i class="fas fa-ban"></i> {$LANG.common.unavailable}</button>
								{elseif $product.ctrl_stock && !$CATALOGUE_MODE}
									<input type="hidden" name="add" value="{$product.product_id}">
									{if $product.minimum_quantity && $product.minimum_quantity>1}
										<div class="dropup min-qty-dropup">
											<button class="btn btn-default btn-block dropdown-toggle" type="button" id="mq{$product.product_id}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-shopping-basket"></i> {$LANG.catalogue.add_to_basket}
											</button>
											<div class="dropdown-menu" aria-labelledby="mq{$product.product_id}">
												<div class="text-muted text-center">
													<label class="clearfix">{$LANG.common.quantity} : <span class="pull-right">X</span></label>
													<div class="text-muted"><small>{$LANG.catalogue.min_purchase_quantity|replace:'%s':$product.minimum_quantity}</small></div>
													<input type="number" name="quantity" value="{$product.minimum_quantity}" min="{$product.minimum_quantity}" maxlength="4" class="form-control qty-input text-center">
													<button type="submit" value="{$LANG.catalogue.add_to_basket}" title="{$LANG.catalogue.add_to_basket}" class="btn btn-default btn-block postfix"><i class="fas fa-shopping-basket"></i> {$LANG.catalogue.add_to_basket}</button>
												</div>
											</div>
										</div>
									{else}
										<input type="hidden" name="quantity" value="1" maxlength="4" class="form-control text-center">
										<button type="submit" value="{$LANG.catalogue.add_to_basket}" title="{$LANG.catalogue.add_to_basket}" class="btn btn-default btn-block"><i class="fas fa-shopping-basket"></i> {$LANG.catalogue.add_to_basket}</button>
									{/if}
								{elseif !$CATALOGUE_MODE}
									<button type="submit" value="{$LANG.catalogue.out_of_stock_short}" title="{$LANG.catalogue.out_of_stock_short}" class="btn btn-default btn-block disabled postfix" disabled><i class="fas fa-ban"></i> {$LANG.catalogue.out_of_stock_short}</button>
								{/if}
							</form>

						</div>
						</div>
					</div>
				
				{/foreach}
			
			</div>
		</div>
	</div>
{/foreach}