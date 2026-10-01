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
<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" dir="{$TEXT_DIRECTION}" lang="{$HTML_LANG}">
	
	<head>
		<title>{$META_TITLE}</title>
		{include file='templates/element.meta.php'}
		<link href="{$CANONICAL}" rel="canonical">
		<link href="{$ROOT_PATH}favicon.ico" rel="shortcut icon" type="image/x-icon">
		{include file='templates/element.css.php'}
		{if !empty($SKIN_SUBSET)}
			<link rel="stylesheet" href="{$ROOT_PATH}skins/{$SKIN_FOLDER}/css/cubecart.{$SKIN_SUBSET}.css">
		{/if}
		{include file='templates/content.recaptcha.head.php'}
		{include file='templates/element.google_analytics.php'}
		{include file='templates/element.js_head.php'}
	</head>
   
	<body>
		
		{foreach from=$BODY_JS_TOP item=js}{$js}{/foreach}

		{if $STORE_OFFLINE}
			<div class="alert alert-danger" style="margin:0px;">
				{$LANG.common.warning_offline}
			</div>
		{/if}
		
		
		
		<div class="page-head">
			{if count($CURRENCIES)>1 OR $LANGUAGES}
			<div class="page-head-bar">
				<div class="container">
					<div class="row">
						<div class="page-head-bar-links">
							{include file='templates/box.currency.php'}
							{include file='templates/box.language.php'}
						</div>
					</div>
				</div>
			</div>
			{/if}
			
			<div class="container">
				<div class="row">
				
					<div class="col-xs-7 col-sm-3">
						<a href="{$ROOT_PATH}" class="main-logo"><img src="{$STORE_LOGO}" alt="{$CONFIG.store_name}"></a>
					</div>
					<div class="hidden-xs col-sm-6">
						<div class="search-block">
							{include file='templates/box.search.php'}
						</div>
					</div>
					<div class="col-xs-5 col-sm-3">
						<div class="navbasket-block">
						{include file='templates/box.basket.php'}
						</div>
					</div>
				
				</div>
			</div>
					
			<div class="container site-navigation-container">
				<div class="row">
					{include file='templates/box.navigation_fix.php'}
				</div>
			</div>
	
		</div>
		
		<div class="collapse" id="collapseSearch">
			<div class="container search-block">
				{include file='templates/box.search.php'}
			</div>
		</div>

		{include file='templates/element.breadcrumb.php'} 
		
		<div class="container page-wrapper">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="page-body {$SECTION_NAME}_wrapper">
						{include file='templates/box.errors.php'}
						{include file='templates/box.progress.php'}
						{$PAGE_CONTENT}
					</div>
				</div>
				<div class="page-side col-xs-12 col-sm-12 col-md-3">
					{include file='templates/box.featured.php'}
					{if $SALE_PRODUCTS && $CONFIG['catalogue_sale_mode']>0 && $POPULAR}
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-12">	
								{include file='templates/box.popular.php'}
							</div>
							<div class="col-xs-12 col-sm-6 col-md-12">
								{include file='templates/box.sale_items.php'}
							</div>
						</div>
					{else}
						{include file='templates/box.popular.php'}
						{include file='templates/box.sale_items.php'}
					{/if}
				</div>
			</div>
			<a href="#"title="{$LANG.common.top}" class="back-to-top">
				<i class="fas fa-arrow-up"></i>
			</a>
		</div>
		
		
		<div class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						{include file='templates/box.documents.php'}
					</div>
					<div class="col-xs-12 col-sm-4">
						{include file='templates/box.newsletter.php'}
					</div>
					<div class="col-xs-12 col-sm-4">
						{$SOCIAL_LIST}
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-copyright text-center">
			{$COPYRIGHT}
			{include file='templates/ccpower.php'}
		</div>
		

		
		{include file='templates/element.js_foot.php'}
		{$DEBUG_INFO}
		{$LIVE_HELP}
		{$SKIN_SELECT}
		
		
		{include file='templates/element.markup.json-ld.php'}
		{$ACP_WIDGET}
	</body>
		
</html>