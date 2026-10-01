{assign var=js_foot value=[ 
							'skins/{$SKIN_FOLDER}/js/vendor/jquery.rating.min.js',
							'skins/{$SKIN_FOLDER}/js/vendor/jquery.chosen.js',
							
							'skins/{$SKIN_FOLDER}/js/vendor/jquery.bxslider.js',
							'skins/{$SKIN_FOLDER}/js/vendor/jquery.validate.js',
							'skins/{$SKIN_FOLDER}/js/vendor/jquery.cookie.js']}
{foreach from=$BODY_JS item=js}
    {$js_foot[] = $js}
{/foreach}
{foreach from=$JS_SCRIPTS key=k item=script}
    {$js_foot[] = $script}
{/foreach}
{combine input=$js_foot output='cache/js_foot.{$SKIN_FOLDER}.js' age='604800' debug=$CONFIG.debug||!$CONFIG.cache}

<script type="text/javascript" src="{$ROOT_PATH}skins/{$SKIN_FOLDER}/js/vendor/swipebox/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="{$ROOT_PATH}skins/{$SKIN_FOLDER}/js/vendor/lightslider/js/lightslider.js"></script>

<script>
	{literal}
$('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:5,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left' 
    });  
		$('.swipebox').swipebox();
		$('.bxslider').bxSlider({
			auto:true,
			captions:true,
			touchEnabled: false
		});
		$('.chzn-select').chosen({
			width:"100%",
			search_contains:true
		});
	{/literal}
</script>
