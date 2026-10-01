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

 {if isset($SUBCATS) && $SUBCATS}
	<h2 class="content-title with_tog">{$category.cat_name}<a href="javascript:" class="cat-subcat-tog" data-toggle="collapse" data-target="#collapseSubCats" aria-expanded="false" aria-controls="collapseSubCats"><i class="fas fa-align-left"></i></a></h2>
{else}
	<h2 class="content-title">{$category.cat_name}</h2>
{/if}
	
{if isset($SUBCATS) && $SUBCATS}
	<div class="collapse" id="collapseSubCats">
		<ul class="list-group">
		{foreach from=$SUBCATS item=subcat}
			<li class="list-group-item">
				<a href="{$subcat.url}" title="{$subcat.cat_name}">{$subcat.cat_name}</a>
			</li>
		{/foreach}
		</ul>
	</div>
{/if}

{if isset($category.image)}
	<div class="cat-hdr-img text-center">
		<img src="{$category.image}" alt="{$category.cat_name}" class="img-responsive">
	</div>
{/if}

{if !empty($category.cat_desc)}
	<div class="cat-desc">
		{$category.cat_desc}
	</div>
{/if}

<br>


{if $PRODUCTS}
	<div class="cat-sorting row">
		<div class="col-xs-7">
			{if isset($SORTING)}
				<form action="{$VAL_SELF}" class="autosubmit pull-left" method="post">
					<div><label for="product_sort">{$LANG.form.sort_by}</label></div>
					<div>
						<select name="sort" id="product_sort" class="form-control">
							<option value="" disabled>{$LANG.form.please_select}</option>
							{foreach from=$SORTING item=sort}
								<option value="{$sort.field}|{$sort.order}" {$sort.selected}>{$sort.name} ({$sort.direction})</option>
							{/foreach}
						</select>
						<input type="submit" value="{$LANG.form.sort}" class="hidden">
					</div>
				</form>
			{/if}
		</div>
		<div class="col-xs-5">
			<div class="pull-right">
				<div><label>{$LANG.common.display}</label></div>
				<div>
					<div class="btn-group" id="layout_toggle">
						<a href="javascript:" class="btn btn-default grid_view_tog"><i class="fas fa-th-large"></i></a>
						<a href="javascript:" class="btn btn-default list_view_tog"><i class="fas fa-th-list"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
{/if}



<div id="ccScroll">

{if $PRODUCTS}
	
	<ul class="product_list">
		
		{assign var=infoid value=1}
		{foreach from=$PRODUCTS item=product}
			{assign var=infoid value=$infoid+1}
			<li class="product_list_item">

				<div class="product_list_item_wrapper">
					<div class="prd_toggle_wrap{$product.product_id}">
						<a class="prd_toggle" href="javascript:" onclick="showDescription('{$product.product_id}','show');"><i class="fas fa-info-circle"></i></a>
					</div>
					
					{if $product.available <= 0}
						<span class="product_availability unavailable">{$LANG.common.unavailable}</span>
					{* ctrl_stock True when a product is considered 'in stock' for purposes of allowing a purchase, either by actually being in stock or via certain settings *}
					{elseif $product.ctrl_stock && !$CATALOGUE_MODE}
					{elseif !$CATALOGUE_MODE}
						<span class="product_availability out_of_stock">{$LANG.catalogue.out_of_stock_short}</span>
					{/if}
					
					<div class="product_image">
						<a href="{$product.url}" class="th" title="{$product.name}">
							<img src="{$product.thumbnail}" alt="{$product.name}">
						</a>
					</div>
					
					<div class="product_info">
						<h3 class="pr_name lv_name"><a href="{$product.url}" title="{$product.name}">{$product.name}</a></h3>
						<h3 class="pr_name gv_name"><a href="{$product.url}" title="{$product.name}">{$product.name|truncate:28:"..."}</a></h3>
						{if $product.review_score}
							<div class="pr_score">
								{for $i = 1; $i <= 5; $i++}
									{if $product.review_score >= $i}
										<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star.png" alt="">
									{elseif $product.review_score > ($i - 1) && $product.review_score < $i}
										<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_half.png" alt="">
									{else}
										<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_off.png" alt="">
									{/if}
								{/for}
								<span class="pr_info text-muted small">{$product.review_info}</span>
							</div>
						{else}
							<div class="pr_score">
								{for $i = 1; $i <= 5; $i++}
									<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_off.png" alt="">
								{/for}
							</div>
						{/if}
						<div class="pr_description clearfix text-muted">
							{$product.description_short|escape:"html"}
						</div>
						<div class="product_pricing text-right clearfix">
							{if $product.ctrl_sale}
								<span class="old_price">{$product.price}</span> <span class="sale_price">{$product.sale_price}</span>
							{else}
								<div><span>{$product.price}</span></div>
							{/if}
						</div>
						<div class="pr_description_ab clearfix hidden" id="infoblock{$product.product_id}">
							{$product.description_short|escape:"html"}
						</div>

					</div>

					<form action="{$VAL_SELF}" method="post" class="add_to_basket">
						{if $product.available <= 0}
							<button type="submit" value="{$LANG.common.unavailable}" title="{$LANG.common.unavailable}" class="btn btn-default btn-block disabled postfix" disabled><i class="fas fa-ban"></i> {$LANG.common.unavailable}</button>
						{elseif $product.ctrl_stock && !$CATALOGUE_MODE}
							<input type="hidden" name="add" value="{$product.product_id}">
							{if $product.minimum_quantity && $product.minimum_quantity>1}
								<div class="dropup cat-min-qty-dropup">
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

			</li>
		{/foreach}
	</ul>
	
	{else}
		
		<div class="alert alert-danger text-center">{$LANG.category.no_products}</div>
		
		{if isset($SUBCATS) && $SUBCATS}
			<div class="clear">
				<div class="list-group">
					{foreach from=$SUBCATS item=subcat}
						<a href="{$subcat.url}" class="list-group-item" title="{$subcat.cat_name}">{$subcat.cat_name}</a>
					{/foreach}
				</div>
			</div>
		{/if}
		
	{/if}
   
	<hr>
	
	{*
	<div class="row">
		<div class="col-xs-12 split-pagination">
			{$PAGINATION}
		</div>
	</div>
	*}
	
   
	<div class="hide" id="ccScrollCat">{$category.cat_id}</div>
	
	{if $page!=='all' && ($page < $total)}
		{$params[$var_name] = $page + 1}
		{* Add "hidden" to the class attribute to not display the more button *}
		<a href="{$current}{http_build_query($params)}{$anchor}" data-next-page="{$params[$var_name]}" data-cat="{$category.cat_id}" class="btn btn-default btn-block ccScroll-next">{$LANG.common.more}</a>
	{/if}
	
	<div class="text-center hidden loading-block" id="loading"><i class="fas fa-sync fa-spin"></i></div>
	
	<br><br>

</div>