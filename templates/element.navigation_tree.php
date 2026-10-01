{if isset($BRANCH.children)}
	<li class="dropdown-submenu">
		<a class="subcat-toggle" data-level="{$BRANCH.cat_level}" href="{$BRANCH.url}">
			{$BRANCH.name} <i class="fas fa-angle-right hidden-xs"></i><i class="fas fa-angle-down hidden-sm hidden-md hidden-lg"></i>
		</a>
		<ul class="dropdown-menu" data-level="{$BRANCH.cat_level}">
			{$BRANCH.children}
			{assign var="allLevel" value=$BRANCH.cat_level+1}
			<li><a href="{$BRANCH.url}" class="subcat-main" data-level="{$allLevel}">{$LANG.common.view_all} {$BRANCH.name}</a></li>
		</ul>
	</li>
{else}
	<li>
		<a href="{$BRANCH.url}" title="{$BRANCH.name}" data-level="{$BRANCH.cat_level}">{$BRANCH.name}</a>
	</li>
{/if}