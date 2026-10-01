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
		
		{foreach from=$BODY_JS_TOP item=js}
			{$js}
		{/foreach}
		
		
		<div class="page-head">
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
			
			<div class="container">
				<div class="row">
				
					<div class="col-xs-7 col-sm-3">
						<a href="{$ROOT_PATH}" class="main-logo"><img src="{$STORE_LOGO}" alt="{$CONFIG.store_name}"></a>
					</div>
					<div class="hidden-xs col-sm-9">
						<div class="search-block">
							{include file='templates/box.search.php'}
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
		
		<div class="container page-wrapper">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="page-body {$SECTION_NAME}_wrapper">
						{include file='templates/box.errors.php'}
						{include file='templates/box.progress.php'}
						{$PAGE_CONTENT}
					</div>
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
		{$LIVE_HELP}
		{$DEBUG_INFO}
		{$SKIN_SELECT}

	</body>
	
	{include file='templates/element.markup.json-ld.php'}

</html>