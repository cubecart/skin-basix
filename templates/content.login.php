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

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		
		<form action="{$VAL_SELF}" id="login_form" method="post">
			
			<h2>{$LANG.account.login} <a href="{$URL.register}" class="btn btn-default pull-right hidden-md hidden-lg">{$LANG.account.register}</a></h2>
			
			{foreach from=$LOGIN_HTML item=html}
				{$html}
			{/foreach}
			
			<dl>
				<dt><label for="login-username">{$LANG.user.email_address}</label></dt>
				<dd><input type="text" autocomplete="off" name="username" id="login-username" class="form-control" placeholder="{$LANG.user.email_address} {$LANG.form.required}" value="{$USERNAME}" required></dd>
			</dl>
			<dl>
				<dt><label for="login-password">{$LANG.account.password}</label></dt>
				<dd><input type="password" autocomplete="off" name="password" id="login-password" class="form-control" placeholder="{$LANG.account.password} {$LANG.form.required}" required></dd>
			</dl>
			<dl class="clearfix">
				<span class="pull-right"><a href="{$URL.recover}">{$LANG.account.forgotten_password}</a></span>
				<span><input type="checkbox" name="remember" id="login-remember" value="1" {if $REMEMBER}checked{/if}><label for="login-remember"> {$LANG.account.remember_me}</label></span>
			</dl>
			<dl>
				<button name="submit" type="submit" class="btn btn-success btn-block">
					{$LANG.account.log_in}
				</button>
			</dl>
			<input type="hidden" name="redir" value="{$REDIRECT_TO}">
		</form>

	</div>
	<div class="col-xs-12 col-sm-12 col-md-6">
		<h2>{$LANG.account.register}</h2>
		<p>{$LANG.account.register_welcome}</p>
		<a href="{$URL.register}" class="btn btn-success btn-block">{$LANG.account.register}</a>
	</div>
</div>

<div class="hide" id="validate_email">{$LANG.common.error_email_invalid}</div>
<div class="hide" id="empty_password">{$LANG.account.error_password_empty}</div>