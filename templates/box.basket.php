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
{if !$CATALOGUE_MODE}
	<div class="dropdown">
		<a href="#" class="navbasket-btn dropdown-toggle" type="button" id="basket_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			<span class="hidden-xs"><i class="fas fa-shopping-basket"></i> {$CART_TOTAL}</span>
			<span class="hidden-sm hidden-md hidden-lg"><i class="fas fa-shopping-basket"></i> {$CART_ITEMS}</span>
			<span class="caret"></span>
		</a>
		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="basket_dropdown">
			{include file='templates/box.basket.content.php'}
		</div>
		<div class="session_token hidden">{$SESSION_TOKEN}</div>
	</div>
{/if}