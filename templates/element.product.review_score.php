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

{if $PRODUCT.review_score && $CTRL_REVIEW}
	<div class="product-reviews-block">
		{for $i = 1; $i <= 5; $i++}
			{if $PRODUCT.review_score >= $i}
				<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star.png" alt="">
			{elseif $PRODUCT.review_score > ($i - 1) && $PRODUCT.review_score < $i}
				<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_half.png" alt="">
			{else}
				<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_off.png" alt="">
			{/if}
		{/for}
		-  <a href="#element-reviews" id="scrollToReviews" class="">{$LANG.catalogue.write_a_review}</a>
		<div class="review-score-sum">{$LANG_REVIEW_INFO}</div>
	</div>

	<hr>
{elseif !$PRODUCT.review_score && $CTRL_REVIEW}	
	<div class="product-reviews-block">
		<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_off.png" alt="">
		<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_off.png" alt="">
		<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_off.png" alt="">
		<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_off.png" alt="">
		<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/star_off.png" alt="">
		 -  <a href="#element-reviews" id="scrollToReviews" class="">{$LANG.catalogue.write_a_review}</a>
	</div>

	<hr>	
	
{/if}