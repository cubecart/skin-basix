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
<div class="row">
	<div  class="col-xs-12 col-sm-6">
		{if $GALLERY|@count gt 1}
			<div class="product-imgs-container">
				<ul id="imageGallery">
					{foreach from=$GALLERY item=image}
						<li {if $image@total lt 2} style="display:none"{/if} data-thumb="{$image.small}" data-src="{$image.medium}">
							<a href="{$image.medium}" rel="gallery-2" class="swipebox" title="{$LANG.catalogue.click_enlarge}">
								<img class="gallery-img" src="{$image.medium}" alt="{$LANG.catalogue.click_enlarge}">
							</a>
						</li>
					{/foreach}
				</ul>
			</div>
		{else}
		<div class="product-gallery-box">
			<div class="product-img-main">
				<img src="{$PRODUCT.medium}" alt="{$PRODUCT.name}" id="img-preview">
			</div>
		</div>
		
		{/if}
	</div>
	<div class="col-xs-12 col-sm-6">
		{include file='templates/element.product.review_score.php'}
		{include file='templates/element.product.options.php'}
		{include file='templates/element.product.call_to_action.php'}
	</div>
</div>