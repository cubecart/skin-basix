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

{if $IS_USER}

	<h2 class="content-title">{$LANG.account.your_downloads}</h2>
	
	<ul class="list-group downloads-list">
		{if !empty($DOWNLOADS)}
			{foreach from=$DOWNLOADS item=download}
				{if $download.deleted}
					<li class="list-group-item text-center">{$LANG.account.download_deleted}</li>
				{else}
					<li class="list-group-item dwnld-item clearfix">
						<div class="dwnld-item-name">
							<strong><a href="{$STORE_URL}/index.php?_a=vieworder&cart_order_id={$download.cart_order_id}" title="{$LANG.common.view_details}">{$download.name}</a></strong>
						</div>
						
						<div class="row">
						<div class="col-xs-12">
						<div class="dwnld-item-filename">
							{if $download.active}
								<a href="{$STORE_URL}/index.php?_a=download&s={$download.file_info.stream}&accesskey={$download.accesskey}" title="{$download.action} {$download.file_info.filename}">
									<i class="fas fa-file"></i> {$download.file_info.filename|truncate:35:"..."}
								</a>
							{else}
								<span class="text-muted">
								<i class="fas fa-file"></i> {$download.file_info.filename|truncate:35:"..."}
								</span>
							{/if}
						</div>
						<div class="dwnld-item-action">
							{if $download.active}
								<a href="{$STORE_URL}/index.php?_a=download&s={$download.file_info.stream}&accesskey={$download.accesskey}" class="btn btn-xs btn-success" title="{$download.action}"><i class="fas fa-download"></i> {$download.action}</a>
							{else}
								<a href="#" class="btn btn-xs btn-default disabled" title="{$LANG.common.view_details}"><i class="fas fa-download"></i> <span class="hidden-xs">{$LANG.common.download}</span></a>
							{/if}
						</div>
						<div class="dwnld-item-downloads"><span title="{$LANG.account.download_count}"><i class="fas fa-download"></i> {$download.downloads}/{$MAX_DOWNLOADS}</span></div>

						<div class="dwnld-item-expiry">
							{if $download.active}
								<span title="{$LANG.account.download_expires}"><i class="fas fa-clock"></i> {$download.expires}</span>
							{else}
								{$LANG.account.download_expired}
							{/if}
						</div>
						
						</div>
						</div>
					</li>
				{/if}
			{/foreach}
		{else}
			<li class="list-group-item text-center">{$LANG.notification.no_downloads_available}</li>
		{/if}
	</ul>
		
	<div class="row">
		<div class="col-xs-12 split-pagination">
			{$PAGINATION}
		</div>
	</div>

{else}
	<h2 class="content-title">{$LANG.catalogue.redeem_download_code}</h2>
		
	<form action="{$VAL_SELF}" method="post">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><label for="download-code">{$LANG.catalogue.download_access_key}</label></div>
					<div class="panel-body">
						<input type="text" name="accesskey" id="download-code" class="form-control" value="" required>
						<div class="text-right">
							<br>
							<input type="submit" value="{$LANG.common.submit}" class="btn btn-success">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
{/if}