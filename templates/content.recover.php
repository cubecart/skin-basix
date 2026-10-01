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

<h2 class="content-title">{$LANG.account.recover_password}</h2>
<p class="text-center">{$LANG.account.recover_password_text}</p>

<br>
<br>

<form action="{$VAL_SELF}" method="post" id="recover_password">
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
					<dl>
						<dt><label for="email">{$LANG.common.email}</label></dt>
						<dd><input type="text" name="email" id="email" class="form-control required" placeholder="{$LANG.common.email} {$LANG.form.required}"></dd>
					</dl>
					{include file='templates/content.recaptcha.php' ga_fid='recover'}
					<dl class="text-center">
						<input type="submit" value="{$LANG.form.submit}" class="btn btn-success">
					</dl>
				</div>
			</div>
		</div>
	</div>
</form>

<div class="hide" id="validate_email">{$LANG.common.error_email_invalid}</div>