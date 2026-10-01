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


{if isset($PRODUCT) && $PRODUCT}

	<div>
		
		<form action="{$VAL_SELF}" method="post" class="add_to_basket">
			<h1 class="content-title">{$PRODUCT.name}</h1>
			{include file='templates/element.product.vertical_gallery.php'}
		</form>
	
		<br>
		<br>
		
		<div class="product_info_sec clearfix">
			<div class="hidden-xs">
				{include file='templates/element.product.tabs.php'}
			</div>
			<div class="hidden-sm hidden-md hidden-lg">
				{include file='templates/element.product.tabs_panel_group.php'}
			</div>
		</div>
			
		{if $SHARE}
			<hr>
			{foreach from=$SHARE item=html}
				{$html}
			{/foreach}
		{/if}
			
		<br>
			
		{include file='templates/element.product_reviews.php'}
			
		<br>
			
		{foreach from=$COMMENTS item=html}
			{$html}
		{/foreach}
	</div>
	
	<div class="hide" id="validate_field_required">{$LANG.form.field_required}</div>

{else}
	<p class="alert alert-danger text-center">{$LANG.catalogue.product_doesnt_exist}</p>
{/if}