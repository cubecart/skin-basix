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